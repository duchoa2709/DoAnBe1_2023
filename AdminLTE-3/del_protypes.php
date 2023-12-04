<?php
				require "config.php";
				require "models/db.php";
				require "models/protypes.php";
				require "models/manufacture.php";
				require "models/products.php";
				// Xoa san pham ra khoi database

				// lay ID
				if(isset($_GET['type_id'])){
					$type_id = intval($_GET['type_id']) ;
				}
				// Tao ham delete prepare id
				$protypes = new Protypes();
				$deleteProtype = $protypes->deleteProtypes($type_id);
				header('location:Protypes.php');
				
				// tra ve dáhboard