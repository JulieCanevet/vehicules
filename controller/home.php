<?php
// appel connexion 
require 'model/connexion.php';

// appel model dont on a besoin 
require 'model/vehicle_manager.php';

// Acces aux fonction bdd manager : $manager
$manager = new VehicleManager($db);

require 'view/add_view.php';

// je m' occupe de l'ajout
if(isset($_POST['add']) && isset($_POST['type']) && isset($_POST['color']) && !empty($_POST['color']) && isset($_POST['price']) && !empty($_POST['price'])){ // Si le formulaire d'ajout est complete et envoyé

	if ($_POST['type'] == 'moto'){ // Si le véhicule est une moto
  		require 'model/entity/moto.php';

  		$vehicle = new Moto(array('type' => $_POST['type'], 'color' => $_POST['color'], 'price' => $_POST['price'], 'wheelsNb' => Moto::WHEELSNB));
    }
    
    elseif ($_POST['type'] == 'truck'){ // Si le véhicule est un camion
      require 'model/entity/truck.php';
      
      	$vehicle = new Truck(array('type' => $_POST['type'], 'color' => $_POST['color'], 'price' => $_POST['price'], 'wheelsNb' => Truck::WHEELSNB));
    }
    
    elseif ($_POST['type'] == 'car'){ // Si le véhicule est une voiture
      require 'model/entity/car.php';      
      
      $vehicle = new Car(array('type' => $_POST['type'], 'color' => $_POST['color'], 'price' => $_POST['price'], 'wheelsNb' => Car::WHEELSNB));
    }
    $manager -> add($vehicle);
}




// Modifier le véhicule
if (isset($_POST['edit'])){ // si on a cliqué sur modifier
  require 'model/detail_manager.php';
  $id = intval(htmlspecialchars($_POST['id'])); // enregistre id cliqué
  $details = new DetailsManager($db);
  $selectvalue = $details -> getDetails($id);
  require 'view/edit_view.php'; // affiche formulaire de modification
}

// Si le formulaire de modification est complet
if(isset($_POST['id']) && isset($_POST['newType']) && isset($_POST['newColor']) && !empty($_POST['newColor']) && isset($_POST['newPrice']) && !empty($_POST['newPrice'])){

    if($_POST['newType'] == 'car'){
              require 'model/entity/car.php';      

          $vehicle = new Car(array('type' => $_POST['newType'], 'color' => $_POST['newColor'], 'price' => $_POST['newPrice'], 'wheelsNb' => Car::WHEELSNB, 'id' => $_POST['id']));
     }

    elseif($_POST['newType'] == 'truck'){
             require 'model/entity/truck.php';      

           $vehicle = new Truck(array('type' => $_POST['newType'], 'color' => $_POST['newColor'], 'price' => $_POST['newPrice'], 'wheelsNb' => Truck::WHEELSNB, 'id' => $_POST['id']));
    }

    elseif($_POST['newType'] == 'moto'){
          require 'model/entity/moto.php';      

                 $vehicle = new Moto(array('type' => $_POST['newType'], 'color' => $_POST['newColor'], 'price' => $_POST['newPrice'], 'wheelsNb' => Moto::WHEELSNB, 'id' => $_POST['id']));
    }
  // appel a la fonction de modification 
  $manager -> edit($vehicle, $_POST['id']);
}


if (isset($_POST['delete'])){ // SUPPRIMER
	$id = intval(htmlspecialchars($_POST['id']));
	$manager -> delete($id);
}


// ajouter une option pour afficher la page d'accueil
$vehicules = $manager -> getVehicles(); // Récupère les véhicules

require 'view/home_view.php'; // Affiche la liste des véhicules page d'accueil
