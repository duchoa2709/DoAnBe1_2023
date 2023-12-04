<?php session_start();
	require "config.php";
  require "models/db.php";
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

<h2 class="text-center"> Giỏ Hàng </h2>
<div class="container"> 
 <table id="cart" class="table table-hover table-condensed"> 
  <thead> 
   <tr> 
    <th style="width:50%">Tên sản phẩm</th> 
    <th style="width:10%">Giá</th> 
    <th style="width:8%">Số lượng</th> 
    <th style="width:22%" class="text-center">Thành tiền</th> 
    <th style="width:10%"> </th> 
   </tr> 
  </thead> 
  <tbody>
  
  <?php 
  $tongTien = 0;

  if(isset($_SESSION['cart'])):
  
foreach($_SESSION['cart'] as $key => $value) : 

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
      <p><?php echo $sp['description'] ?></p> 
     </div> 
    </div> 
   </td> 
   <td data-th="Price"><?php echo $sp['price'] ?></td> 
   <td data-th="Quantity"><input class="form-control text-center" value="<?php echo $value['soluong'] ?>" type="">
   </td> 
   <?php
  $thanhtien = $sp['price'] * $value['soluong'];
  
  $tongTien += $thanhtien;
  
    
   ?>
   <td data-th="Subtotal" class="text-center"><?php   echo  number_format($thanhtien)   ?></td> 
   <td class="actions" data-th="">
    <button class="btn btn-info btn-sm">
    <a href="product.php?id=<?php echo $key ?>"> <i class="fa fa-edit"></i></a>    
   
    </button> 
    <button class="btn btn-danger btn-sm">
    <a href="del.php?id=<?php echo $key ?>"><i class="fa fa-trash-o"></i></a>    
    
    </button>
   </td> 
 
  </tr> 

  <?php endif; endforeach; endforeach; endif; ?>
  <tr> 
    <?php
   
    ?>
 
    <td><a href="index.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>
    </td> 
    <td colspan="2" class="hidden-xs"> </td> 
   <?php
  
   ?>
    <td class="hidden-xs text-center"><strong>Tổng tiền <?php echo number_format($tongTien)  ?> VND</strong>
    </td> 
    <td><a href="checkout.php" class="btn btn-success btn-block">Thanh toán <i class="fa fa-angle-right"></i></a>
    </td> 
</tr> 

  </tfoot> 
 </table>
</div>