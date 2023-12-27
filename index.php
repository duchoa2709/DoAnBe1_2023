<?php
	require_once "config.php";
	require_once "models/db.php";
	require_once "models/protypes.php";
	require_once "models/manufacture.php";
	require_once "models/products.php";

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


<?php 
	include('header.php');

    if (!isset($_SESSION['load_home_page'])) {
        include('component/loadhomepage.php');    
        $_SESSION['load_home_page'] = true;
    }
    
    if (isset($_SESSION['load_home_page']) && isset($_SESSION['time_start'])) {
        $time = time() - $_SESSION['time_start'];
        if ($time > 5) {
            unset($_SESSION['load_home_page'], $_SESSION['time_start']);
        }
    } else {
        $_SESSION['time_start'] = time();
    }
    
    
?>
<!-- BANNER -->
<?php
    include('component/slidebanner.php');
?>

<!-- SECTION -->
<div class="section" style="margin-top: 50px;">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title" data-aos="fade-right" data-aos-offset="500" data-aos-easing="ease-in-sine">Top
                        Selling</h3>
                </div>
            </div>
            <!-- /section title -->

            <!-- Products tab & slick -->
            <div class="col-md-12">
                <div class="row">

                    <div class="products-tabs" data-aos="fade-up" data-aos-offset="500" data-aos-easing="ease-in-sine">
                        <!-- tab -->
                        <div id="tab1" class="tab-pane active">
                            <div class="products-slick" data-nav="#slick-nav-1">
                                <!-- product -->

                                <?php 
										foreach($getAllProducts as $value):
                                            if ($value['feature'] == 1) :
										?>
                                <div class="product">
                                    <div class="product-img">
                                        <?php
                                        // Chia chuỗi hình ảnh thành một mảng
                                        $images = explode(",", $value['image']);
                                        // Lấy hình ảnh đầu tiên
                                        $firstImage = $images[0];
                                        ?>
                                        <img src="./img/<?php echo $firstImage ?>" alt="">
                                        <div class="product-label">
                                            <?php if ($value['feature'] == 1): ?>
                                            <span class="sale">Top Selling</span>
                                            <?php endif ?>
                                        </div>
                                    </div>

                                    <div class="product-body">
                                        <p class="product-category">Category</p>
                                        <h3 class="product-name"><a
                                                href="product.php?id=<?php echo $value['id'] ?>"><?php echo $value['name']; ?></a>
                                        </h3>
                                        <h4 class="product-price"> <?php echo number_format($value['price'])  ?> VND
                                        </h4>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="product-btns">
                                            <button class="add-to-wishlist"> <a
                                                    href="addwishlist.php?id=<?php echo $value['id']; ?>"><i
                                                        class="fa fa-heart-o"></i></a> <span class="tooltipp">add to
                                                    wishlist</span></button>
                                            <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                    class="tooltipp">add to compare</span></button>
                                            <button class="quick-view"><a
                                                    href="product.php?id=<?php echo $value['id'] ?>"><i
                                                        class="fa fa-eye"></i></a> <span class="tooltipp"> quick
                                                    view</span></button>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> <a
                                                href="?action=add_to_cart&id=<?php echo $value['id'] ?>">add to
                                                cart</a></button>
                                    </div>
                                </div>

                                <?php
                                            endif;
                                        endforeach
                                        ?>


                                <!-- /product -->

                                <!-- /product -->
                            </div>
                            <div id="slick-nav-1" class="products-slick-nav"></div>
                        </div>
                        <!-- /tab -->
                    </div>
                </div>
            </div>
            <!-- Products tab & slick -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

<!-- HOT DEAL SECTION -->
<div id="hot-deal" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <div class="hot-deal">
                    <ul class="hot-deal-countdown">
                        <li>
                            <div>
                                <h3>02</h3>
                                <span>Days</span>
                            </div>
                        </li>
                        <li>
                            <div>
                                <h3>10</h3>
                                <span>Hours</span>
                            </div>
                        </li>
                        <li>
                            <div>
                                <h3>34</h3>
                                <span>Mins</span>
                            </div>
                        </li>
                        <li>
                            <div>
                                <h3>60</h3>
                                <span>Secs</span>
                            </div>
                        </li>
                    </ul>
                    <h2 class="text-uppercase">hot deal this week</h2>
                    <p>New Collection Up to 50% OFF</p>
                    <a class="primary-btn cta-btn" href="#">Shop now</a>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /HOT DEAL SECTION -->

<!-- SECTION -->
<?php 
    foreach($getAllprotypes as $protype):
?>
<section class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title" data-aos="fade-right" data-aos-offset="500" data-aos-easing="ease-in-sine"><?php echo $protype['type_name'] ?></h3>
                </div>
            </div>
            <!-- /section title -->

            <!-- Products tab & slick -->
            <div class="col-md-12">
                <div class="row">
                    <div class="products-tabs" data-aos="fade-up" data-aos-offset="500" data-aos-easing="ease-in-sine">
                        <!-- tab -->
                        <div id="tab2" class="tab-pane fade in active">
                            <div class="products-slick" data-nav="#slick-nav-2">
                                <!-- product -->
                                <?php 
								foreach($getAllProducts as $product):
                                    if ($protype['type_id'] == $product['type_id']) :
										?>
                                <div class="product">
                                    <div class="product-img">
                                        <?php
                                        // Chia chuỗi hình ảnh thành một mảng
                                        $images = explode(",", $product['image']);
                                        // Lấy hình ảnh đầu tiên
                                        $firstImage = $images[0];
                                        ?>
                                        <img src="./img/<?php echo $firstImage ?>" alt="">
                                        <div class="product-label">
                                            <?php if ($product['feature'] == 1): ?>
                                            <span class="sale">Top Selling</span>
                                            <?php endif ?>
                                        </div>
                                    </div>

                                    <div class="product-body">
                                        <p class="product-category">Category</p>
                                        <h3 class="product-name"><a
                                                href="product.php?id=<?php echo $product['id'] ?>"><?php echo $product['name']; ?></a>
                                        </h3>
                                        <h4 class="product-price"> <?php echo number_format($product['price'])  ?> VND
                                        </h4>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="product-btns">
                                            <button class="add-to-wishlist"> <a
                                                    href="addwishlist.php?id=<?php echo $product['id']; ?>"><i
                                                        class="fa fa-heart-o"></i></a> <span class="tooltipp">add to
                                                    wishlist</span></button>
                                            <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                    class="tooltipp">add to compare</span></button>
                                            <button class="quick-view"><a
                                                    href="product.php?id=<?php echo $product['id'] ?>"><i
                                                        class="fa fa-eye"></i></a> <span class="tooltipp"> quick
                                                    view</span></button>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> <a
                                                href="?action=add_to_cart&id=<?php echo $product['id'] ?>">add to
                                                cart</a></button>
                                    </div>
                                </div>
                                <?php 
                                            endif;
                                        endforeach
                                        ?>
                            </div>
                            <div id="slick-nav-2" class="products-slick-nav"></div>
                        </div>
                        <!-- /tab -->
                    </div>
                </div>
            </div>
            <!-- /Products tab & slick -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</section>

<?php 
    endforeach
?>
<!-- /SECTION -->



<!-- /FOOTER -->
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
</body>

</html>