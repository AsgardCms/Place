<?php namespace Modules\Place\Entities;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="place.place_translations")
 */
class PlaceTranslation
{
    /** @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;

    /** @ORM\ManyToOne(targetEntity="Modules\Place\Entities\Place", inversedBy="translation") */
    private $place;

    /** @ORM\Column(length=2) */
    private $locale;

    /** @ORM\Column(length=255, nullable=true) */
    private $description;

    /** @ORM\Column(length=255, nullable=false) */
    private $slug;

    public function __construct()
    {
        $this->place = new ArrayCollection();
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($key, $value)
    {
        $this->$key = $value;
    }
}
