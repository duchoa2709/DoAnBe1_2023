<?php

    header('Content-Type: application/json');
	require_once "../config.php";
	require_once "../models/db.php";
	require_once "../models/products.php";
	
	
	$product= new Product;
	
	$result = [];
	if(!empty($_GET['id'])) {
	    $id = intval($_GET['id']);
	    $result = $product->getAllProductsById($id);
	    
	} else {
	    $result = $product->getAllProducts();
	    
	}
	
	echo json_encode($result);
	die();
?>



