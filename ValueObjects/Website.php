<?php namespace Modules\Place\ValueObjects;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\Embeddable */
class Website
{
    /**
     * @ORM\Column(type="string")
     */
    private $website;

    public function __construct($website)
    {
        $this->website = $website;
    }

    public function __toString()
    {
        return $this->website;
    }
}
