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
				$getAllProductsLimit2 = $product->getAllProductsLimit(6, 6);
				$getAllProductsLimit3 = $product->getAllProductsLimit(6, 12);
			
?>

 <?php include('header.php') ?>
		<!-- SECTION -->
		
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">New Products</h3>
							<div class="section-nav">

								<ul class="section-tab-nav tab-nav">
							
									  
										<?php foreach($getAllManufacture  as $key => $value): 
											if($key == 0):
			
											?>
											
											<li class="active"><a  href="tab_product.php?manu_id=<?php echo $value['manu_id'] ?>"> 
											<?php echo $value['manu_name']; ?>
										<?php endif; endforeach; ?>
											

										
									
									</a></li>
								
									
									<?php foreach($getAllManufacture  as $value): ?>
										<?php if($value['manu_id'] != 4):  ?>
									  <li><a  href="tab_product.php?manu_id=<?php echo $value['manu_id'] ?>"><?php echo $value['manu_name']?></a></li>
									  <?php endif; endforeach ?>

								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">

							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										<!-- product -->

										<?php 
										foreach($getAllProducts as $value):
											if($value['type_id'] == $_GET['type_id']):
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
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> <a href="product.php?id=<?php echo $value['id'] ?>">add to cart</a></button>
											</div>
										</div>
										
										<?php endif; endforeach ?>
										
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
	

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top selling</h4>
							<div class="section-nav">
								<div id="slick-nav-3" class="products-slick-nav"></div>
							</div>
						</div>
						
						<div class="products-widget-slick" data-nav="#slick-nav-3">
							
								<!-- product widget -->
							 
								<?php foreach ($getAllProductsLimit1  as $key => $value):?>
									<?php if ($key % 3 == 0) echo "<div>"; ?>
									
								
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/<?php echo $value['image'] ?>" alt="">
									
									</div>
									<div class="product-body">
										<p class="product-category">Category </p>
										<h3 class="product-name"><a href="#"> <?php echo $value['name'] ?></a></h3>
										<h4 class="product-price"><?php echo $value['price'] ?> </h4>
									</div>
								</div>
								<?php if($key % 3 == 2) echo "</div>" ?>
								<?php  endforeach; ?>
								<!-- /product widget -->

						</div>
					</div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top selling</h4>
							<div class="section-nav">
								<div id="slick-nav-4" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-4">
							
								<!-- product widget -->
								<?php foreach ($getAllProductsLimit2  as $key => $value):?>
									<?php if ($key % 3 == 0) echo "<div>"; ?>
									
								
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/<?php echo $value['image'] ?>" alt="">
									
									</div>
									<div class="product-body">
										<p class="product-category">Category </p>
										<h3 class="product-name"><a href="#"> <?php echo $value['name'] ?></a></h3>
										<h4 class="product-price"><?php echo $value['price'] ?> </h4>
									</div>
								</div>
								<?php if($key % 3 == 2) echo "</div>" ?>
								<?php  endforeach; ?>
								
							

						
						</div>
					</div>

					<div class="clearfix visible-sm visible-xs"></div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top selling</h4>
							<div class="section-nav">
								<div id="slick-nav-5" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-5">
						<?php foreach ($getAllProductsLimit1  as $key => $value):?>
									<?php if ($key % 3 == 0) echo "<div>"; ?>
									
								
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/<?php echo $value['image'] ?>" alt="">
									
									</div>
									<div class="product-body">
										<p class="product-category">Category </p>
										<h3 class="product-name"><a href="#"> <?php echo $value['name'] ?></a></h3>
										<h4 class="product-price"><?php echo $value['price'] ?> </h4>
									</div>
								</div>
								<?php if($key % 3 == 2) echo "</div>" ?>
								<?php  endforeach; ?>
								<!-- /product widget -->

							
						</div>
					</div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- NEWSLETTER -->

		<!-- /FOOTER -->
		<?php include('footer.php'); ?>

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
