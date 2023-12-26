<?php  
				require "config.php";
				require "models/db.php";
				require "models/protypes.php";
				require "models/manufacture.php";
				require "models/products.php";

			

				$product= new Product;
				$getAllProducts = $product->getAllProducts();
                $protypes = new Protypes;
	$getAllprotypes = $protypes->getAllprotypes();

	$manufacture= new Manufacture;
	$getAllManufacture = $manufacture->getAllManufacture();

	$product= new Product;
	$getAllProducts = $product->getAllProducts();

	$getAllProductsLimit1 = $product->getAllProductsLimit(6, 0);
	$getAllProductsLimit2 = $product->getAllProductsLimit(6, 6);
	$getAllProductsLimit3 = $product->getAllProductsLimit(6, 12);		
?>


<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

<!-- Bootstrap -->
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

<!-- Slick -->
<link type="text/css" rel="stylesheet" href="css/slick.css" />
<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

<!-- nouislider -->
<link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

<!-- Font Awesome Icon -->
<link rel="stylesheet" href="css/font-awesome.min.css">

<!-- Custom stlylesheet -->
<link type="text/css" rel="stylesheet" href="css/style.css" />
<?php 
	include('header.php');

    if (!isset($_SESSION['load_home_page']) || $_SESSION['load_home_page'] == false) {
        include('component/loadhomepage.php');    
        $_SESSION['load_home_page'] = true;
    }
?>
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
          if (isset($_SESSION['wishlist'])) :
            foreach($_SESSION['wishlist'] as $key => $value) : 
              foreach($getAllProducts as $sp):
                if($key == $sp['id']):
        ?>
            <tr>
                <td data-th="Product">
                    <div class="row">
                        <div class="col-sm-2 hidden-xs"><img src="./img/<?php echo $sp['image'] ?>" alt="Sản phẩm 1"
                                class="img-responsive" width="100">
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
            <?php endif; endforeach; endforeach; 
            else:
              echo "Không có sản phẩm nào trong wishlist";
            endif;
            ?>
            <tr>
            </tr>
            </tfoot>
    </table>
</div>
<?php include('footer.php'); ?>

<!-- jQuery Plugins -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/nouislider.min.js"></script>
<script src="js/jquery.zoom.min.js"></script>
<script src="js/main.js"></script>

<script>
AOS.init();
</script>