<?php
class VehicleManager{

// Instance de PDO
  private $_db; 
  
  public function __construct($db) {
    $this->setDb($db);
  }
	public function setDb($db) 
	{
		$this->_db = $db;
	}
	
  	public function add($vehicle){
	    $req = $this -> _db ->prepare('INSERT INTO vehicle (type, color, price, wheelsNb) VALUES(:type, :color, :price, :wheelsNb)');
	    $req -> execute(array(
	    'type' => $vehicle -> getType(),
	    'color' => $vehicle -> getColor(),
	    'price' => $vehicle -> getPrice(),
	    'wheelsNb' => $vehicle -> getWheelsNb()
	    ));
	}

	public function liste(){
		$q = $this -> _db -> query('SELECT * FROM vehicle');
		$details = $q -> fetchAll();
		return $details;

	}

	// public function edit(){

	// }
	// public function delete(){
		
	// }
}