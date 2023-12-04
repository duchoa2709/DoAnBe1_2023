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
?>

</html>


<?php include('header.php') ?>

<div class="tieu_chi">
    <h3>Sắp xếp theo</h3>
</div>

<div class="tim_kiem_sx">
<div class="search-sort-item is-flex"> <div class="icon">
    <svg height="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
    <path d="M416 288h-95.1c-17.67 0-32 14.33-32 32s14.33 32 32 32H416c17.67 0 32-14.33 32-32S433.7 288 416 288zM544 32h-223.1c-17.67 0-32 14.33-32 32s14.33 32 32 32H544c17.67 0 32-14.33 32-32S561.7 32 544 32zM352 416h-32c-17.67 0-32 14.33-32 32s14.33 32 32 32h32c17.67 0 31.1-14.33 31.1-32S369.7 416 352 416zM480 160h-159.1c-17.67 0-32 14.33-32 32s14.33 32 32 32H480c17.67 0 32-14.33 32-32S497.7 160 480 160zM192.4 330.7L160 366.1V64.03C160 46.33 145.7 32 128 32S96 46.33 96 64.03v302L63.6 330.7c-6.312-6.883-14.94-10.38-23.61-10.38c-7.719 0-15.47 2.781-21.61 8.414c-13.03 11.95-13.9 32.22-1.969 45.27l87.1 96.09c12.12 13.26 35.06 13.26 47.19 0l87.1-96.09c11.94-13.05 11.06-33.31-1.969-45.27C224.6 316.8 204.4 317.7 192.4 330.7z"></path></svg></div>
        Giá cao
      </div>
 <div class="search-sort-item is-flex"><div class="icon"><svg height="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M320 224H416c17.67 0 32-14.33 32-32s-14.33-32-32-32h-95.1c-17.67 0-32 14.33-32 32S302.3 224 320 224zM320 352H480c17.67 0 32-14.33 32-32s-14.33-32-32-32h-159.1c-17.67 0-32 14.33-32 32S302.3 352 320 352zM320 96h32c17.67 0 31.1-14.33 31.1-32s-14.33-32-31.1-32h-32c-17.67 0-32 14.33-32 32S302.3 96 320 96zM544 416h-223.1c-17.67 0-32 14.33-32 32s14.33 32 32 32H544c17.67 0 32-14.33 32-32S561.7 416 544 416zM192.4 330.7L160 366.1V64.03C160 46.33 145.7 32 128 32S96 46.33 96 64.03v302L63.6 330.7c-6.312-6.883-14.94-10.38-23.61-10.38c-7.719 0-15.47 2.781-21.61 8.414c-13.03 11.95-13.9 32.22-1.969 45.27l87.1 96.09c12.12 13.26 35.06 13.26 47.19 0l87.1-96.09c11.94-13.05 11.06-33.31-1.969-45.27C224.6 316.8 204.4 317.7 192.4 330.7z"></path></svg></div>
        Giá thấp
</div>
	
		</div>


</div>
<div class="section">
			<!-- container -->
		
			<!-- /container -->
		</div>
	
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">
										<!-- product -->
											<?php 
										foreach($getAllProducts as $value):
                                            if($_GET['manu_id'] == $value['manu_id']):
										?>
										<div class="product">
											<div class="product-img">
												<img src="./img/<?php echo $value['image'] ?>" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">NEW</span>
												</div>
											</div>

											<div class="product-body">
												<p class="product-category">Category</p>

												
												
												

												<h3 class="product-name"><a href="#"><?php echo $value['name'] ?></a></h3>
												<h4 class="product-price"> <?php echo number_format($value['price'])  ?> VND</h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> <a href="product.php?id=<?php echo $value['id']?>">add to cart</a></button>
											</div>
										</div>
										
										<?php endif; endforeach ?>
										
										
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
</div>
	
		<?php include('footer.php'); ?>

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>



    
    
