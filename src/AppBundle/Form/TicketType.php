<?php

namespace AppBundle\Form;

use Acme\ReusableBundle\Form\PurchasableType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TicketType extends PurchasableType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date')
        ;
    }

    public function getName()
    {
        return 'app_bundle_ticket_type';
    }
}
