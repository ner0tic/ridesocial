<?php
namespace RideSocial\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="passenger")
 * @ORM\Entity(repositoryClass="RideSocial\UserBundle\Repository\PassengerRepository")
 */
class Passenger
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
     * @var RideSocial\EventBundle\Entity\Event
     * 
     * @ORM\ManyToOne(targetEntity="RideSocial\EventBundle\Entity\Event", inversedBy="events")
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

    protected $approved;

    public function isApproved()
    {
        return $this->approved;
    }

    private function setApproved(boolean $approved)
    {
        /** 
         * @todo  make sure only admin || event->driver have access!
         */
        $this->approved = $approved;

        return $this;
    }
}
