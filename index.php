<?php

require 'view/home_view.php';

// Si on clique sur le + ajout un vehicule
if (isset($_POST['plus'])){
  require 'view/add_view.php';
}

if((isset($_POST['add'])) && isset($_POST['type'])){ // Si le formulaire d'ajout est complete et envoyé
  require 'model/add_post.php'; // appel gestion des classes

  if($_POST['type'] == 'moto'){ // Si le véhicule est une moto
    $moto = new Moto($_POST['name'], $_POST['type'], $_POST['color'], $_POST['price']);
  }
  elseif($_POST['type'] == 'truck'){ // Si le véhicule est un camion
    $truck = new Truck($_POST['name'], $_POST['type'], $_POST['color'], $_POST['price']);
  }
  elseif($_POST['type'] == 'car'){ // Si le véhicule est une voiture
    $truck = new Truck($_POST['name'], $_POST['type'], $_POST['color'], $_POST['price']);
  }  
}