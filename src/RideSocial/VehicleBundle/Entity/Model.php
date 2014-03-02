<?php

namespace RideSocial\VehicleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

use RideSocial\UtilityBundle\Traits\SluggableTrait;
use RideSocial\UtilityBundle\Traits\TimestampableTrait;

/**
 * Model
 *
 * @ORM\Table(name="model")
 * @ORM\Entity(repositoryClass="RideSocial\VehicleBundle\Repository\ModelRepository")
 */
class Model
{
    /**
     * constructor
     */
    public function __construct()
    {
        $this->styles   = new ArrayCollection();
    }

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    protected $name;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Model
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
}
