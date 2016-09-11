<?php

namespace AppBundle\Entity;

use Acme\ReusableBundle\Entity\AbstractCart;
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
