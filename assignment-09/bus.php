<?php

class Bus {
  public $armed = false;
  public $exploded = false;
  public $speed = 20;
  
  function setSpeed($mph) {
  $this->speed = $mph;
    
  if ($mph <= 50 && $this->armed == false) {
	echo "You're going too slow!" . "<br>";
  }
  if ($mph >= 50) {
  $this->armed = true;
  $this->exploded = false;
	echo "You're going over 50mph, the bomb is armed but not exploded yet.". "<br>";
  }
    
  if ($this->armed == true && $mph <= 50) {
  $this->exploded = true;
	echo "You're going back to under 50mph now but ooops too late! BOOM!!!.". "<br>";
  }
}
  
  function trigger() {
    $this->exploded = true;
	echo "BOOM!!!!". "<br>";
  }

  function getSpeed() {
    $this->speed;
	echo "Your current speed is now back to 20mph.";
  }
}
