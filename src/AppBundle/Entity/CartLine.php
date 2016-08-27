<?php

namespace AppBundle\Entity;

use Acme\ReusableBundle\Model\AbstractCartLine;
use Doctrine\ORM\Mapping as ORM;

/**
 * CartLine.
 *
 * @ORM\Table(name="app_cart_line")
 * @ORM\Entity()
 */
class CartLine extends AbstractCartLine
{
}
