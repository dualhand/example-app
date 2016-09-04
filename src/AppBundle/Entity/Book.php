<?php

namespace AppBundle\Entity;

use Acme\ReusableBundle\Model\AbstractPurchasable;
use Acme\ReusableBundle\Traits\DeliverableTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * Book.
 *
 * @ORM\Table(name="app_book")
 * @ORM\Entity()
 */
class Book extends AbstractPurchasable
{
    use DeliverableTrait;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=100)
     */
    protected $author;

    /**
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param string $author
     *
     * @return Book
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }
}
