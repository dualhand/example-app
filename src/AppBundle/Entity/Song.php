<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Acme\ReusableBundle\Entity\AbstractPurchasable;

/**
 * Song.
 *
 * @ORM\Table(name="app_song")
 * @ORM\Entity()
 */
class Song extends AbstractPurchasable
{
    /**
     * @var string
     *
     * @ORM\Column(type="string", length=100)
     */
    protected $artist;

    /**
     * @return string
     */
    public function getArtist()
    {
        return $this->artist;
    }

    /**
     * @param string $artist
     *
     * @return Song
     */
    public function setArtist($artist)
    {
        $this->artist = $artist;

        return $this;
    }
}
