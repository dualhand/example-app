<?php

namespace AppBundle;

use Doctrine\Bundle\DoctrineBundle\DependencyInjection\Compiler\DoctrineOrmMappingsPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class AppBundle.
 */
class AppBundle extends Bundle
{
    /**
     * @param ContainerBuilder $container
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $this->buildOrmCompilerPass($container);
    }

    /**
     * @param ContainerBuilder $container
     */
    private function buildOrmCompilerPass(ContainerBuilder $container)
    {
        $annotationReader = new Definition('Doctrine\Common\Annotations\AnnotationReader');
        $driver = new Definition(
            'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
            array($annotationReader, array(realpath(__DIR__.DIRECTORY_SEPARATOR.'Entity')))
        );

        $container->addCompilerPass(
            new DoctrineOrmMappingsPass(
                $driver,
                array(
                    '%app.book.class%',
                    '%app.ticket.class%',
                    '%app.song.class%',
                    '%app.cart.class%',
                    '%app.cart_line.class%',
                ),
                array()
            )
        );
    }
}
