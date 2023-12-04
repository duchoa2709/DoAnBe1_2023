<?php  session_start();
				require "config.php";
				require "models/db.php";
				require "models/protypes.php";
				require "models/manufacture.php";
				require "models/products.php";

			

				$product= new Product;
				$getAllProducts = $product->getAllProducts();



            
			
?>


<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

<!-- Bootstrap -->
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

<!-- Slick -->
<link type="text/css" rel="stylesheet" href="css/slick.css"/>
<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

<!-- nouislider -->
<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

<!-- Font Awesome Icon -->
<link rel="stylesheet" href="css/font-awesome.min.css">

<!-- Custom stlylesheet -->
<link type="text/css" rel="stylesheet" href="css/style.css"/>

<h2 class="text-center"> Your Wish List </h2>
<div class="container"> 
 <table id="cart" class="table table-hover table-condensed"> 
  <thead> 
   <tr> 
    <th style="width:70%">Tên sản phẩm</th> 
    <th style="width:20%">Giá</th> 
   
   
    <th style="width:10%"> action</th> 
   </tr> 
  </thead> 
  <tbody>
  
  <?php 
  $tongTien = 0;
  foreach($_SESSION['wishlist'] as $key => $value) : 

foreach($getAllProducts as $sp):
    if($key == $sp['id']):
      

?>  
  <tr> 
   
   <td data-th="Product"> 
    <div class="row"> 

  
     <div class="col-sm-2 hidden-xs"><img src="./img/<?php echo $sp['image'] ?>" alt="Sản phẩm 1" class="img-responsive" width="100">
     </div> 

     <div class="col-sm-10"> 
      <h4 class="nomargin"><?php echo $sp['name'] ?></h4> 
      
     </div> 
    </div> 
   </td> 
   <td data-th="Price"><?php echo $sp['price'] ?></td> 

   </td> 
  

   <td class="actions" data-th="">
  
    <button class="btn btn-danger btn-sm">
    <a href="del_wishlist.php?id=<?php echo $key ?>"><i class="fa fa-trash-o"></i></a>    
    
    </button>
   </td> 
 
  </tr> 

  <?php endif; endforeach; endforeach; ?>
  <tr> 
  
 
  
    
</tr> 

  </tfoot> 
 </table>
</div>