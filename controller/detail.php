<?php
// connexion 
require 'model/connexion.php';
require 'model/detail_manager.php';

if(isset($_GET['id'])){ // display details of one vehicle
	$details = new DetailsManager($db);
	$vue = $details -> getDetails($_GET['id']);
}
require 'view/add_view.php';
require 'view/detail_view.php';