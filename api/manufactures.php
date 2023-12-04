<?php

    header('Content-Type: application/json');
	require_once "../config.php";
	require_once "../models/db.php";
	require_once "../models/manufacture.php";
	
	
	
	$manufacture= new Manufacture;
	
	
	$result = [];
	if(!empty($_GET['id'])) {
	    $id = intval($_GET['id']);
	    $result = $manufacture->getAllmanufacturebyid($id);
	} else {
	    $result = $manufacture->getAllManufacture();
	    
	}
	
	echo json_encode($result);
	die();
?>
