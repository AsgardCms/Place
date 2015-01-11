<?php namespace Modules\Place\Entities;

use Doctrine\ORM\Mapping as ORM;
use Mitch\LaravelDoctrine\Traits\Timestamps;

/**
 * @ORM\Entity()
 * @ORM\Table(name="posts")
 * @ORM\HasLifecycleCallbacks()
 */
class Place
{
    use Timestamps;
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Embedded(class="Modules\Place\ValueObjects\Email")
     */
    private $email;
    /**
     * @ORM\Embedded(class="Modules\Place\ValueObjects\Website")
     */
    private $website;
    /**
     * @ORM\Embedded(class="Modules\Place\ValueObjects\Address")
     */
    private $address;
    /**
     * @ORM\Embedded(class="Modules\Place\ValueObjects\Position")
     */
    private $position;

}
