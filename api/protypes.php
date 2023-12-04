<?php

    header('Content-Type: application/json');
	require_once "../config.php";
	require_once "../models/db.php";
	require_once "../models/protypes.php";
	
	
	
	$prototype= new Protypes();
	
	
	$result = [];
	if(!empty($_GET['id'])) {
	    $id = intval($_GET['id']);
	    $result = $prototype->getAllprotypesById($id);
	} else {
	    $result = $prototype->getAllprotypes();
	    
	}
	
	echo json_encode($result);
	die();
?>
