<?php session_start();
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
				$getAllProductsLimit2 = $product->getAllProductsLimit(6, 6);
				$getAllProductsLimit3 = $product->getAllProductsLimit(6, 12);
              
			
$fullname = $_GET['first-name']. " ". $_GET['last-name'];
$fulladdress = $_GET['address'] . " " . $_GET['city'];



							




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

<div class="container">
    <div class="row">
        <div class="col-sm-3">

        </div>
        <div class="col-sm-6">
           
            <div class="titles">
            <div class="button_close">
               <a href="close_order.php">X</a> 
            </div>
               
                <p>Cảm ơn Quý khách hàng đã chọn mua hàng tại Electro. Trong 15 phút, Electro sẽ SMS hoặc gọi để xác nhận đơn hàng.</p>
                        <h5 class="title_center">ĐẶT HÀNG THÀNH CÔNG</h5>
                        <div class="text_thongtin">
                        <p>Người Đặt: <?php echo $fullname ?></p>
                        <p>Số Điện Thoại: <?php echo $_GET['tel'] ?></p>
                        <p>Email: <?php echo $_GET['email'] ?></p>
                        <p>Nhận Sản Phẩm Tại: <?php echo $fulladdress ?></p>
                       
                        </div>
                        
                        
                        <?php
                        
                        
            
                        foreach($_SESSION['cart'] as $key => $value):
                            foreach($getAllProducts as $sp):
                                if($key == $sp['id']):
                        ?>
                        <div class="product-widget">
                           <div class="product-img">
                           <img src="./img/<?php echo $sp['image'] ?>" alt="">
                                                    
                             </div>
                             <div class="product-body">
                                                        
                              <h3 class="product-name"><a href="#"> <?php echo $sp['name'] ?></a></h3>
                                 <h4 class="product-price"><?php echo $sp['price'] ?> </h4>
                                <p> Số Lượng : <?php echo $value['soluong']; ?></p>
                               </div>
                            </div>

               <?php
              


             
            
            endif; endforeach; endforeach; 
            
            ?>
               <div class="buttom_submit">
                                <button class="ktra" type="submit"> <a href="addtocart.php">Kiểm Tra Đơn Hàng </a> </button>
                                <button class="tieptuc" type="submit"> <a href="index.php">Tiếp Tục Mua Hàng</a>  </button>
                            </div>

               
             
                 
             </div>
        </div>
                                </div>
                                </div>
   
    <?php include('footer.php') ?>
   

              
               
