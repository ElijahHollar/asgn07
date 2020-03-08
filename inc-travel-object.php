<?php

class Travel
{
  private $destination;
  private $numTravelers;
  
  public function getDestination() {
    return $this->destination;
  }

  public function setDestination($destination) {
    $this->destination = $destination;
  }

  public function getNumTravelers() {
    return $this->numTravelers;
  }

  public function setNumTravelers($numTravelers) {
    $this->numTravelers = $numTravelers;
  }

  public function getAirFare() {
    if($this->destination == "Tokyo") {
      $airFare = 400 * $this->numTravelers;
    }
    elseif($this->destination == "Rome") {
      $airFare = 250 * $this->numTravelers;
    }
    elseif($this->destination == "London") {
      $airFare = 300 * $this->numTravelers;
    }
    elseif($this->destination == "Sydney") {
      $airFare = 425 * $this->numTravelers;
    }
    elseif($this->destination == "Paris") {
      $airFare = 500 * $this->numTravelers;
    }
    return $airFare;
  }

  public function getHotelCost() {
    if($this->destination == "Tokyo") {
      $hotelCost = 200 * $this->numTravelers;
    }
    elseif($this->destination == "Rome") {
      $hotelCost = 125 * $this->numTravelers;
    }
    elseif($this->destination == "London") {
      $hotelCost = 150 * $this->numTravelers;
    }
    elseif($this->destination == "Sydney") {
      $hotelCost = 215 * $this->numTravelers;
    }
    elseif($this->destination == "Paris") {
      $hotelCost = 250 * $this->numTravelers;
    }
    return $hotelCost;
  }

  public function getDistance() {
    if($this->destination == "Tokyo") {
      $distance = 6000;
    }
    elseif($this->destination == "Rome") {
      $distance = 2500;
    }
    elseif($this->destination == "London") {
      $distance = 2250;
    }
    elseif($this->destination == "Sydney") {
      $distance = 7500;
    }
    elseif($this->destination == "Paris") {
      $distance = 2300;
    }
    return $distance;
  }
}

?>