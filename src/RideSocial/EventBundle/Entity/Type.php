<?php
namespace RideSocial\EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

use RideSocial\UtilityBundle\Traits\SluggableTrait;
use RideSocial\UtilityBundle\Traits\TimestampableTrait;

/**
 * @ORM\Table(name="event_type")
 * @ORM\Entity(repositoryClass="RideSocial\EventBundle\Repository\TypeRepository")
 */
class Type
{
    use SluggableTrait;
    use TimestampableTrait;
    
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
     * Name
     * @var  string name
     * @ORM\Column(name="name", type="string")
     */
    protected $name = '';

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
     * Set name
     *
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Description
     * @var string
     */
    protected $description = '';

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set description
     *
     * @param string $description description
     *
     * @return string
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @ORM\ManyToOne(targetEntity="RideSocial\EventBundle\Entity\Event", inversedBy="type")
     * @ORM\JoinColumn(name="event_id", referencedColumnName="id")
     */
    protected $event = '';

    /**
      * Get event
      *
      * @return Event
      */
    public function getEvent()
    {
        return $this->event;
    }

    /**
      * Set event
      *
      * @param Event $event event
      *
      * @return  Event
      */
    public function setEvent(Event $event)
    {
        $this->event = $event;

        return $this;
    }
}
