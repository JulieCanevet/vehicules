<?php
class DetailsManager {
	// Instance de PDO
	private $_db; 
	  
	public function __construct($db) {
	  $this->setDb($db);
	}	
	
	public function setDb($db) 
	{
		$this->_db = $db;
	}

	// Select le vehicule cliqué
	public function getDetails($id){
		$req = $this -> _db -> prepare('SELECT * FROM vehicle
			WHERE id= :id');
		$req -> execute(array(
			'id' => $id
		));

		$details = $req -> fetch();
		return $details;
	}
}