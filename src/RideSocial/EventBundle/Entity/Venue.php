<?php
namespace RideSocial\EventBundle\Entity;


class Venue
{
    protected $id;
    protected $name;
    protected $foursquare_id;
  
    /**
     * Get Id
     * 
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
  
    /**
     * Set Id
     * 
     * @param integer $id
     * 
     * @return Venue
     */
    public function setId($id)
    {
        $this->id = $id;
    
        return $this;
    }

    /**
     * Get Name
     * 
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Set The Name
     * 
     * @param string $name
     * 
     * @return Venue
     */
    public function setName($name)
    {
        $this->name = $name;
      
        return $this;
    }

    public function getFoursquareId()
    {
        return $this->foursquare_id;
    }

    public function setFoursquareId($id)
    {
        $this->foursquare_id = $id;
    }
}
