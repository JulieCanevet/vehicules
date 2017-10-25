<?php
abstract class Vehicle {
	protected $_type;
	protected $_color;
	protected $_price;
	protected $_wheelsNb;

	public function __construct(array $donnees){ // constructeur
		$this -> hydrate($donnees);
     	// $this -> _type = strtolower(static::class);
   }

	public function hydrate(array $donnees) { // hydratation
    	foreach ($donnees as $key => $value) {
 	 	    $method = 'set'.ucfirst($key);
			if (method_exists($this, $method)) {
		    	$this -> $method($value);
			}
    	}
	}

	const TYPE = array( // Valeurs possibles pour type
		'moto' => 'moto',
		'car' => 'car',
		'truck' => 'truck'
	);

	// LISTE DES GETTERS 
  	public function getType() { return $this-> _type;}
  	public function getColor() { return $this-> _color;}
  	public function getPrice() { return $this-> _price;}
	
	// LISTE DES SETTERS
	public function setType($type){ // Verification nom
 		if(in_array($type, static::TYPE, TRUE)){		
			$this -> _type = $type;
		}
	}

	public function setColor($color){
			$this -> _color = $color;
	}

	public function setPrice($price){
 			$this -> _price = $price;
 		}
}