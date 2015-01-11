<?php namespace Modules\Place\ValueObjects;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\Embeddable */
class Address
{
    /**
     * @ORM\Column(type="string")
     */
    private $street;
    /**
     * @ORM\Column(type="string")
     */
    private $number;
    /**
     * @ORM\Column(type="string")
     */
    private $zip;
    /**
     * @ORM\Column(type="string")
     */
    private $city;
    /**
     * @ORM\Column(type="string")
     */
    private $country;

    public function __construct($street, $number, $zip, $city, $country)
    {
        $this->street = $street;
        $this->number = $number;
        $this->zip = $zip;
        $this->city = $city;
        $this->country = $country;
    }

    public function __toString()
    {
        return "$this->street $this->number, $this->zip $this->city, $this->country";
    }
}
