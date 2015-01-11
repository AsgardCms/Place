<?php namespace Modules\Place\Entities;

use Doctrine\ORM\Mapping as ORM;
use Mitch\LaravelDoctrine\Traits\Timestamps;
use Doctrine\Common\Collections\ArrayCollection;
use Modules\Core\Doctrine\Translatable;

/**
 * @ORM\Entity()
 * @ORM\Table(name="place.places")
 * @ORM\HasLifecycleCallbacks()
 */
class Place
{
    use Timestamps, Translatable;

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
    /**
     * @ORM\OneToMany(targetEntity="Modules\Place\Entities\PlaceTranslation", mappedBy="place", cascade={"persist", "remove"})
     */
    private $translation;

    public function __construct()
    {
        $this->translation = new ArrayCollection();
    }
}
