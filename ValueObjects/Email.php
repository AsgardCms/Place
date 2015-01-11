<?php namespace Modules\Place\ValueObjects;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\Embeddable */
class Email
{
    /**
     * @ORM\Column(type="string")
     */
    private $email;

    public function __construct($email)
    {
        $this->email = $email;
    }

    public function __toString()
    {
        return $this->email;
    }
}
