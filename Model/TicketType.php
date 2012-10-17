<?php

namespace Rizza\CalendarBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Security\Core\User\UserInterface;

abstract class TicketType {
    
    protected $id;

    protected $event;

    protected $title;
    
    protected $price;
    
    protected $earlybird_price;
    
    protected $group_discount;

    public function __construct($title = null)
    {
        $this->title = $title;
        $this->allDay = false;
    }

    public function __toString()
    {
        return $this->title;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }
    
    public function setPrice($price)
    {
      $this->price = $price;
    }
    
    public function getPrice()
    {
      return $this->price;
    }
    
    public function setEarlybirdPrice($earlybird_price)
    {
      $this->earlybird_price = $earlybird_price;
    }
    
    public function getEarlybirdPrice()
    {
      return $this->earlybird_price;
    }
    
    public function setGroupDiscount($group_discount)
    {
      $this->group_discount = $group_discount;
    }
    
    public function getGroupDiscount()
    {
      return $this->group_discount;
    }
    
    public function setEvent(EventInterface $event)
    {
        $this->event = $event;
    }
    
    public function getEvent()
    {
        return $this->event;
    }
  
}
