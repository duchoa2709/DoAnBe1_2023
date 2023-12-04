<?php
	require "config.php";
	require "models/db.php";
	require "models/protypes.php";
	require "models/manufacture.php";
	require "models/products.php";

	$protypes = new Protypes;
				$getAllprotypes = $protypes->getAllprotypes();

				$manufacture= new Manufacture;
				$getAllManufacture = $manufacture->getAllManufacture();

				$product= new Product;
				$getAllProducts = $product->getAllProducts();
				
				$getAllProductsLimit1 = $product->getAllProductsLimit(6, 0);

                $count = $product->countProducts();

                
               
               	
?>
<!DOCTYPE html>
<html lang="en">
 
<head>
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title>Online Shopping Products Filter using Ajax & PHP</title>
 
    <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="css/jquery-ui.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
 
</head>
 
<body>
 
    <!-- Page Content -->
    <?php include('header.php') ?>
    <div class="container ">
 
        
 
        <div class="row">
            <div class="col-md-3">

   
 
                <div class="list-group">
                    <h3>Category</h3>
						<?php foreach($getAllprotypes as $value): ?>
                        <div class="list-group-item checkbox">
                            <label>
                                <input type="checkbox" class="filter_all category" value="<?php echo $value['type_id'] ?>">
                                <?php echo $value['type_name'] ?>
                            </label>
                        </div>
						<?php endforeach; ?>
                    
                </div>
 
                <div class="list-group">
                    <h3>Brand</h3>
							<?php foreach($getAllManufacture as $value): ?>
                            <div class="list-group-item checkbox">
                                <label>
                                    <input type="checkbox" class="filter_all brand" value="<?php echo $value['manu_id'] ?>">
                                    <?php echo $value['manu_name'] ?>
                                </label>
                            </div>
							<?php endforeach; ?>
                   
                 </div>

            
 
               
            </div>
 
            <div class="col-md-9">

						  
         
 
                <div class="row filter_data">
               
               
                       
                      
                
                 
                </div>
               
        </div>
 
    </div>
 
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

 
    <script>
        $(document).ready(() => {
            let brand = [];
            let category = [];

            goiAjax(brand, category);
            $('.brand').change(function () {
                brand = get_filter("brand");
                category = get_filter("category");
                //goi ajax truyen brand, category
                goiAjax(brand, category);
            });

            $('.category').change(function () {
                brand = get_filter("brand");
                category = get_filter("category");
                //goi ajax truyen brand, category
                goiAjax(brand, category);
            });


            function goiAjax(brandData, categoryData) {
                $.post("fetch_data.php", {action: 'ajax_product',brand: brandData, category: categoryData , ho:"toan"}, (data) => {
                    $('.filter_data').html(data);
                })
               
            }

            function get_filter(class_name)
            {
                var filter = [];
                $('.'+class_name+':checked').each(function(){
                    filter.push($(this).val());
                });
                return filter;
            }
        })
    </script>
   
 
</body>
 
</html>