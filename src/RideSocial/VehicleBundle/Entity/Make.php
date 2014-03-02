<?php

namespace RideSocial\VehicleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

use RideSocial\UtilityBundle\Traits\SluggableTrait;
use RideSocial\UtilityBundle\Traits\TimestampableTrait;

/**
 * Make
 *
 * @ORM\Table(name="make")
 * @ORM\Entity(repositoryClass="RideSocial\VehicleBundle\Repository\MakeRepository")
 */
class Make
{
    /**
     * constructor
     */
    public function __construct()
    {
        $this->models   = new ArrayCollection();
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
     * @return Make
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

    /**
     * @ORM\OneToMany(targetEntity="Model", mappedBy="make")
     */
    protected $models;

    /**
     * Get models
     *
     * @return ArrayCollection
     */
    public function getModels()
    {
        return $this->models;
    }

    /**
     * Set models
     *
     * @param array $models models
     *
     * @return self
     */
    public function setModels(array $models)
    {
        if (! $models instanceof ArrayCollection) {
            $models = new ArrayCollection($models);
        }

        $this->models = $models;

        return $this;
    }

    /**
     * Has models
     *
     * @return boolean
     */
    public function hasModels()
    {
        return !$this->models->isEmpty();
    }

    /**
     * Get a model
     *
     * @param Model|String $model model
     *
     * @return Model
     */
    public function getModel($model)
    {
        return $this->models->get($model);
    }

    /**
     * Add a model
     *
     * @param Model $model model
     *
     * @return self
     */
    public function addModel(Model $model)
    {
        $this->models->add($model);

        return $this;
    }

    /**
     * Remove a model
     *
     * @param Model|String $model model
     *
     * @return self
     */
    public function removeModel($model)
    {
        $this->models->remove($model);

        return $this;
    }
}
