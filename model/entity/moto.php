<?php
require 'model/entity/vehicle.php'; // appelle la classe mère

class Moto extends Vehicle{ // définit l'enfant véhicule
	const WHEELSNB = 2;
  	
  	public function getWheelsNb(){ // Getter
  		return $this-> _wheelsNb;
  	}
	// LISTE DES SETTERS
	public function setWheelsNb(){
			$this -> _wheelsNb = self::WHEELSNB;
	}
}