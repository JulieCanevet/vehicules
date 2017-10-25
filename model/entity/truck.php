<?php
require 'vehicle.php'; // appelle la classe mère

class Truck extends Vehicle{ // définit l'enfant véhicule
	const WHEELSNB = 6;
  	
  	public function getWheelsNb(){ // Getter
  		return $this-> _wheelsNb;
  	}
	// LISTE DES SETTERS
	public function setWheelsNb(){
			$this -> _wheelsNb = self::WHEELSNB;
	}
}
