<?php
				require "config.php";
				require "models/db.php";
				require "models/protypes.php";
				require "models/manufacture.php";
				require "models/products.php";
				// Xoa san pham ra khoi database

				// lay ID
				if(isset($_GET['id'])){
					$id = intval($_GET['id']) ;
				}
				// Tao ham delete prepare id
				$product = new Product();
				$deleteProducts = $product->deleteProducts($id);
				header('location:Products.php');
				
				// tra ve dáhboard