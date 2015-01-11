<?php namespace Modules\Place\ValueObjects;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\Embeddable */
class Position
{
    /**
     * @ORM\Column(type="float")
     */
    private $longitude;
    /**
     * @ORM\Column(type="float")
     */
    private $latitude;

    public function __construct($longitude, $latitude)
    {
        $this->longitude = $longitude;
        $this->latitude = $latitude;
    }

    public function __toString()
    {
        return $this->longitude . ' ' . $this->latitude;
    }
}
