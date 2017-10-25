<?php 
require 'vehicle.php'; // appelle la classe mère 

class Car extends Vehicle{ // définit l'enfant véhicule
	const WHEELSNB = 4;

  	public function getWheelsNb(){ 
  		return $this-> _wheelsNb;
  	}
	// LISTE DES SETTERS
	public function setWheelsNb(){
			$this -> _wheelsNb = self::WHEELSNB;
	}
}