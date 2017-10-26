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

	public function getVehicles(){
		$req = $this -> _db -> query('SELECT * FROM vehicle');
		$details = $req -> fetchAll();
		return $details;

	}

	public function edit($vehicle, $id){
		$req = $this -> _db -> prepare('UPDATE vehicle 
			SET type = :newtype, color = :newcolor, price = :newprice, wheelsNb = :wheelsNb
			WHERE id=:id');
		$req -> execute(array(
			'newtype' => $vehicle -> getType(),
			'newcolor' => $vehicle -> getColor(),
			'newprice' => $vehicle -> getPrice(),
			'wheelsNb' => $vehicle -> getWheelsNb(), 
			'id' => $id
		));
	}



	public function delete($id){
		$req = $this -> _db -> prepare('DELETE FROM vehicle
		WHERE id = :id');
		$req -> execute(array(
			'id' => $id
		));
	}
}





















