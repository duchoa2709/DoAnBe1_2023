<?php

      header('Content-Type: application/json');
	require_once "../config.php";
	require_once "../models/db.php";
	require_once "../models/products.php";
	require_once "../models/user.php";



	
	
	$user= new User;

	$result = [];
	if(!empty($_GET['id'])) {
	    $id = intval($_GET['id']);
	    $result = $user->getAllProductsById($id);
	    
	} else {
	    $result = $user->getAllAdmin();
	    
	}
	
	echo json_encode($result);
	die();
?>




	
	
	
	
?>