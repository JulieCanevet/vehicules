<?php
// appel connexion 
require 'model/connexion.php';

// appel model dont on abesoin 
require 'model/vehicle_manager.php';
// recupere les vehicule -> $vehicules
$manager = new VehicleManager($bdd);



// if post -> je m' occupe de ajout, et je redirige
if (isset($_POST['plus'])){
  require 'view/add_view.php';
}

if(isset($_POST['add']) && isset($_POST['type']) && isset($_POST['color']) && !empty($_POST['color']) && isset($_POST['price']) && !empty($_POST['price'])){ // Si le formulaire d'ajout est complete et envoyé

	if ($_POST['type'] == 'moto'){ // Si le véhicule est une moto
  		require 'model/entity/moto.php';

  		$moto = new Moto(array('type' => $_POST['type'], 'color' => $_POST['color'], 'price' => $_POST['price'], 'wheelsNb' => Moto::WHEELSNB));
  		$manager -> add($moto);
    }
    
    elseif ($_POST['type'] == 'truck'){ // Si le véhicule est un camion
      require 'model/entity/truck.php';
      
      	$truck = new Truck(array('type' => $_POST['type'], 'color' => $_POST['color'], 'price' => $_POST['price'], 'wheelsNb' => Truck::WHEELSNB));
      	$manager -> add($truck);

    }
    
    elseif ($_POST['type'] == 'car'){ // Si le véhicule est une voiture
      require 'model/entity/car.php';      
      
      $car = new Car(array('type' => $_POST['type'], 'color' => $_POST['color'], 'price' => $_POST['price'], 'wheelsNb' => Car::WHEELSNB));
    }
}

$vehicules = $manager -> liste(); // Récupère les véhicules

require 'view/home_view.php'; // Affiche la liste des véhicules pas d'accueil
