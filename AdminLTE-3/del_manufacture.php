<?php
				require "config.php";
				require "models/db.php";
				require "models/protypes.php";
				require "models/manufacture.php";
				require "models/products.php";
				// Xoa san pham ra khoi database

				// lay ID
				if(isset($_GET['manu_id'])){
					$manu_id = intval($_GET['manu_id']) ;
				}
				// Tao ham delete prepare id
				$manufacture = new Manufacture();

				$deleteProtype = $manufacture->deleteManufacture($manu_id);
				header('location:Manufacture.php');
				
				// tra ve dáhboard