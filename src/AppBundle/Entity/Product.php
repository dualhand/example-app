<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Acme\ReusableBundle\Entity\Abstracts\AbstractProduct;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;

/**
 * Product.
 *
 * @ORM\Table(name="app_product")
 * @ORM\Entity()
 */
class Product extends AbstractProduct
{
    use ORMBehaviors\Sluggable\Sluggable;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return array
     */
    public function getSluggableFields()
    {
        return array('title');
    }
}
