<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Acme\ReusableBundle\Entity\AbstractPurchasable;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;

/**
 * Song.
 *
 * @ORM\Table(name="app_song")
 * @ORM\Entity()
 */
class Song extends AbstractPurchasable
{
    use ORMBehaviors\Sluggable\Sluggable;

    /**
     * @var Album
     *
     * @ORM\ManyToOne(targetEntity="Album", inversedBy="songs")
     * @ORM\JoinColumn(name="album_id", referencedColumnName="id")
     */
    protected $album;

    /**
     * @return Album
     */
    public function getAlbum()
    {
        return $this->album;
    }

    /**
     * @param Album $album
     *
     * @return Song
     */
    public function setAlbum($album)
    {
        $this->album = $album;

        return $this;
    }

    /**
     * @return array
     */
    public function getSluggableFields()
    {
        return array('title');
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->title;
    }
}
