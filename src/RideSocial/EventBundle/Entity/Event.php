<?php

namespace RideSocial\EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="event")
 * @ORM\Entity(repositoryClass="RideSocial\EventBundle\Repository\EventRepository")
 */
class Event
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

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
     * @var string $name
     * 
     * @ORM\Column(name="name", type="string", length=150)
     * @Assert\NotBlank()
     */
    protected $name;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @var string $venue_name
     * 
     * @ORM\ManyToOne(targetEntity="RideSocial\EventBundle\Entity\Venue", inversedBy="event")
     * @ORM\JoinColumn(name="venue_id", referencedColumnName="id")
     */
    protected $venue = '';


    /**
     * @var string $start
     * 
     * @ORM\Column(name="start", type="datetime")
     */
    protected $start;

    public function getStart()
    {
        return $this->start;
    }

    public function setStart(\DateTime $start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * @var string $end
     * 
     * @ORM\Column(name="end", type="datetime")
     */
    protected $end;

    public function getEnd()
    {
        return $this->end;
    }

    public function setEnd(\DateTime $end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * @var string $cost
     * 
     * @ORM\Column(name="cost", type="decimal")
     */
    protected $cost="0.00";

    public function getCost()
    {
        return $this->cost;
    }

    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * @var text $details
     * 
     * @ORM\Column(name="details", type="text", nullable=true)
     */
    protected $details;

    public function getDetails()
    {
        return $this->details;
    }

    public function setDetails($details)
    {
        $this->details = $details;

        return $this;
    }

    /**
     * @var RideSocial\UserBundle\Entity\User
     * 
     * @ORM\ManyToOne(targetEntity="RideSocial\UserBundle\Entity\User", inversedBy="users")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")  
     */
    protected $user;

    public function getUser()
    {
        return $this->user;
    }

    public function setUser(User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @ORM\ManyToOne(targetEntity="RideSocial\EventBundle\Entity\Type", inversedBy="event")
     * @ORM\JoinColumn(name="type_id", referencedColumnName="id")
     */
    protected $type;

    public function getType()
    {
        return $this->type;
    }

    public function setType(Type $type)
    {
        $this->type = $type;

        return $this;
    }
}
