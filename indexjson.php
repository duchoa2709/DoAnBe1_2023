<?php


				require_once "config.php";
				require_once "models/db.php";
				require_once "models/protypes.php";
				require_once "models/manufacture.php";
				require_once "models/products.php";

				

				$product= new Product;
				$getAllProducts = $product->getAllProducts();
				
				
		
// Thiết lập header cho đối tượng JSON
header('Content-Type: application/json');

// Tạo một mảng đối tượng JSON

$data =[ array(
    'name' => 'John',
    'age' => 30,
    'city' => 'New York'
)];


 
// Chuyển đổi mảng thành đối tượng JSON
$json = json_encode($getAllProducts);

// In đối tượng JSON
echo $json;
?>