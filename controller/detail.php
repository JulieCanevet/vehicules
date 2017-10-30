<?php
// appel connexion 
require 'model/connexion.php';
require 'model/detail_manager.php';

if(isset($_GET['id'])){
	$details = new DetailsManager($db);
	$vue = $details -> getDetails($_GET['id']);
}
require 'view/detail_view.php';