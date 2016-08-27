<?php

namespace AppBundle\Entity;

use Acme\ReusableBundle\Model\AbstractCart;
use Doctrine\ORM\Mapping as ORM;

/**
 * Cart.
 *
 * @ORM\Table(name="app_cart")
 * @ORM\Entity()
 */
class Cart extends AbstractCart
{
}
