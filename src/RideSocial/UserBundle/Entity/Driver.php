<?php
namespace RideSocial\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

use RideSocial\UtilityBundle\Traits\SluggableTrait;
use RideSocial\UtilityBundle\Traits\TimestampableTrait;

use RideSocial\VehicleBundle\Entity\Vehicle;
use RideSocial\EventBundle\Entity\Event;
use RideSocial\UserBundle\Entity\User;
use RideSocial\UserBundle\Entity\Passenger;

/**
 * @ORM\Entity
 * @ORM\Table(name="driver")
 * @ORM\Entity(repositoryClass="RideSocial\UsertBundle\Repository\DriverRepository")
 */
class Driver
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
    * @var RideSocial\VehicleBundle\Entity\Vehicle
    * 
    * @ORM\ManyToOne(targetEntity="RideSocial\VehicleBundle\Entity\Vehicle", inversedBy="driver")
    * @ORM\JoinColumn(name="vehicle_id", referencedColumnName="id") 
    */
    protected $vehicle;

    public function getVehicle()
    {
        return $this->vehicle();
    }

    public function setVehicle(Vehicle $vehicle)
    {
        $this->vehicle = $vehicle;

        return $this;
    }

    /**
    * @var RideSocial\EventBundle\Entity\Event
    * 
    * @ORM\ManyToOne(targetEntity="RideSocial\EventBundle\Entity\Event", inversedBy="driver")
    * @ORM\JoinColumn(name="event_id", referencedColumnName="id") 
    */
    protected $event;

    public function getEvent()
    {
        return $this->event;
    }

    public function setEvent(Event $event)
    {
        $this->event = $event;

        return $this;
    }

    /**
    * @ORM\OneToMany(targetEntity="Passenger", mappedBy="passenger")
    */
    protected $passengers;

    /**
    * @var integer $reserved_seats
    * 
    * @ORM\Column(name="reserved_seats", type="integer", nullable=true) 
    */
    protected $reserved_seats = 1; //driver

    public function setReservedSeats($seats = 1)
    {
        $this->reserved_seats = $seats;

        return $this;
    }

    public function getReservedSeats()
    {
        return $this->reserved_seats;
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
}
