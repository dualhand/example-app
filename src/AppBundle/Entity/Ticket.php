<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use DualHand\ReusableBundle\Entity\AbstractPurchasable;

/**
 * Ticket.
 *
 * @ORM\Table(name="app_ticket")
 * @ORM\Entity()
 */
class Ticket extends AbstractPurchasable
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(type="date")
     */
    protected $date;

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     *
     * @return Ticket
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

}
