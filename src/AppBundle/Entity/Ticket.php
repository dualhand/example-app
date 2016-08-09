<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Acme\ReusableBundle\Entity\AbstractPurchasable;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;

/**
 * Ticket.
 *
 * @ORM\Table(name="app_ticket")
 * @ORM\Entity()
 */
class Ticket extends AbstractPurchasable
{
    use ORMBehaviors\Sluggable\Sluggable;

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

    /**
     * @return array
     */
    public function getSluggableFields()
    {
        return array('title');
    }
}
