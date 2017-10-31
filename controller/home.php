<?php
require 'model/connexion.php'; // appel connexion 

require 'model/vehicle_manager.php'; // appel model dont on a besoin 

$manager = new VehicleManager($db); // Acces aux fonction bdd manager : $manager

require 'view/add_view.php';

// je m' occupe de l'ajout
if(isset($_POST['add']) && isset($_POST['type']) && isset($_POST['color']) && !empty($_POST['color']) && isset($_POST['price']) && !empty($_POST['price'])){ // if form is completed and send

	if ($_POST['type'] == 'moto'){ // if the vehicle is a moto
  	require 'model/entity/moto.php';
  	$vehicle = new Moto(array('type' => $_POST['type'], 'color' => $_POST['color'], 'price' => $_POST['price'], 'wheelsNb' => Moto::WHEELSNB));
  }
    
  elseif ($_POST['type'] == 'truck'){ // if vehicle is a truck
    require 'model/entity/truck.php';   
    $vehicle = new Truck(array('type' => $_POST['type'], 'color' => $_POST['color'], 'price' => $_POST['price'], 'wheelsNb' => Truck::WHEELSNB));
  }
    
  elseif ($_POST['type'] == 'car'){ // if vehicle is a car
    require 'model/entity/car.php';           
    $vehicle = new Car(array('type' => $_POST['type'], 'color' => $_POST['color'], 'price' => $_POST['price'], 'wheelsNb' => Car::WHEELSNB));
  }
  $manager -> add($vehicle);
}

// edit vehicle
if (isset($_POST['edit'])){ // if "edit" is clicked
  require 'model/detail_manager.php';
  $id = intval(htmlspecialchars($_POST['id'])); // save clicked id
  $details = new DetailsManager($db);
  $selectvalue = $details -> getDetails($id);
  require 'view/edit_view.php'; // display edition form
}

// if edition form is completed and sent
if(isset($_POST['id']) && isset($_POST['newType']) && isset($_POST['newColor']) && !empty($_POST['newColor']) && isset($_POST['newPrice']) && !empty($_POST['newPrice'])){
// depends on type and send new datas to hydrataion
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
  // call to edit function
  $manager -> edit($vehicle, $_POST['id']);
}

if (isset($_POST['delete'])){ // delete
	$id = intval(htmlspecialchars($_POST['id']));
	$manager -> delete($id);
}

// display listing in home page
if(isset($_POST['ordre'])){
    if($_POST['ordre'] == 'color'){

      $vehicules = $manager -> getVehicles('color'); // send 'order by color'
    }
    elseif($_POST['ordre'] == 'price'){
      $vehicules = $manager -> getVehicles('price'); // send 'order by price'
    }
    elseif($_POST['ordre'] == 'type'){
      $vehicules = $manager -> getVehicles('type'); // send 'order by type'
    }
}
else{
  $vehicules = $manager -> getVehicles('price'); // default sent order by price

}
require 'view/home_view.php'; // display listing in home page