<?php  session_start();
			require "config.php";
			require "models/db.php";
			require "models/protypes.php";
			require "models/manufacture.php";
			require "models/products.php";

			$product= new Product;
				$getAllProducts = $product->getAllProducts();
				$getAllProductslimit4 = $product->getAllProductslimit4();
				$protypes = new Protypes;
				$getAllprotypes = $protypes->getAllprotypes();
		
				
			

?>	

<style>
	/* Popup container */
.popup {

  display: inline-block;
  cursor: pointer;
}

/* The actual popup (appears on top) */
.popup .popuptext {
    display: none;
    width: 500px;
    background-color: #555;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 8px 0;
    position: fixed;
    z-index: 1;
    height: 500px;
    /* top: 0px; */
    right: 33%;
    top: 70px;
    /* bottom: 125%; */
    margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

/* Toggle this class when clicking on the popup container (hide and show the popup) */
.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;}
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}


</style>

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




		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Checkout</h3>
						<ul class="breadcrumb-tree">
							<li><a href="#">Home</a></li>
							<li class="active">Checkout</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

						<div class="col-md-7">
							<!-- Billing Details -->
							<div class="billing-details">
								<div class="section-title">
									<h3 class="title">Billing address</h3>
								</div>

					<form action="order.php" method="GET">
								
										<div class="form-group">
											<input class="input" type="text" name="first-name" placeholder="First Name " require>
										</div>
										<div class="form-group">
											<input class="input" type="text" name="last-name" placeholder="Last Name">
										</div>
										<div class="form-group">
											<input class="input" type="email" name="email" placeholder="Email">
										</div>
										<div class="form-group">
											<input class="input" type="text" name="address" placeholder="Address">
										</div>
										<div class="form-group">
											<input class="input" type="text" name="city" placeholder="City">
										</div>
										<div class="form-group">
											<input class="input" type="text" name="country" placeholder="Country">
										</div>
										<div class="form-group">
											<input class="input" type="text" name="zip-code" placeholder="ZIP Code">
										</div>
										<div class="form-group">
											<input class="input" type="tel" name="tel" placeholder="Telephone">
										</div>
								
										
										
						

									
								<div class="form-group">
									<div class="input-checkbox">
										<input type="checkbox" id="create-account">
										<label for="create-account">
											<span></span>
											Create Account?
										</label>
										<div class="caption">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
											<input class="input" type="password" name="password" placeholder="Enter Your Password">
										</div>
									</div>
								</div>
							</div>
							<!-- /Billing Details -->

							<!-- Shiping Details -->
							<div class="shiping-details">
								<div class="section-title">
									<h3 class="title">Shiping address</h3>
								</div>
								<div class="input-checkbox">
									<input type="checkbox" id="shiping-address">
									<label for="shiping-address">
										<span></span>
										Ship to a diffrent address?
									</label>
									<div class="caption">
									

										
													</div>
												</div>
										</div>
										<!-- /Shiping Details -->

										<!-- Order notes -->
										<div class="order-notes">
											<textarea class="input" placeholder="Order Notes"></textarea>
										</div>
										<!-- /Order notes -->
									</div>
									<!-- Order Details -->
									<div class="col-md-5 order-details">
										<div class="section-title text-center">
											
											<h3 class="title">Your Order</h3>		
									</div>
										
										<div class="order-summary">
															<div class="order-col">
																<div><strong>PRODUCT</strong></div>
																<div><strong>TOTAL</strong></div>
															</div>
															<?php
															$tongTien = 0;
															
														foreach($_SESSION['cart'] as $key => $value):
															foreach($getAllProducts as $sp):
																
															if($sp['id'] == $key):
																

															?>
															<div class="order-products">
																<div class="order-col">
																	
																			<div><?php echo $value['soluong'] ?>x <?php echo $sp['name'] ?> </div>
																			<div><?php echo number_format($sp['price'] ) ?> VND</div>
																		<?php
																		$thanhtien = $sp['price'] * $value['soluong'];
																		$tongTien += $thanhtien;
																		
																		?>
													
																</div>
															</div>
													
															<?php endif; endforeach; endforeach; ?>
															
															
															<div class="order-col">
																<div>Shiping</div>
																<div><strong>FREE</strong></div>
															</div>
															<div class="order-col">
																
																<div><strong>TOTAL</strong></div>
																<div><strong class="order-total"><?php echo number_format($tongTien)  ?></strong></div>
															</div>
														
														
										</div>

										<div class="payment-method">
											<div class="input-radio">
												<input type="radio" name="payment" id="payment-1">
												<label for="payment-1">
													<span></span>
												Direct Bank Transfer
												</label>
											</div>
										</div>
										<div class="caption">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
										</div>
										<div>
															
															<div class="input-radio">
																<input type="radio" name="payment" id="payment-2">
																<label for="payment-2">
																	<span></span>
																	Cheque Payment
																</label>
																<div class="caption">
																	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
																</div>
															</div>
															<div class="input-radio">
																<input type="radio" name="payment" id="payment-3">
																<label for="payment-3">
																	<span></span>
																	Paypal System
																</label>
																<div class="caption">
																	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
																</div>
															</div>
										
														<div class="input-checkbox">
															<input type="checkbox" id="terms">
															<label for="terms">
																<span></span>
																I've read and accept the <a href="#">terms & conditions</a>
															</label>
														</div>

														
														
										
									
										<input class=" primary-btn order-submit" type="submit" value="Submit">
									
								


						
									</form>

				
													
											
								


			
												
					     
										
						</div>
					<!-- /Order Details -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
								
		
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p>Sign Up for the <strong>NEWSLETTER</strong></p>
							<form>
								<input class="input" type="email" placeholder="Enter Your Email">
								<button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
							</form>
							<ul class="newsletter-follow">
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-pinterest"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">About Us</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>1734 Stonecoal Road</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>+021-95-51-84</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>email@email.com</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categories</h3>
								<ul class="footer-links">
									<li><a href="#">Hot deals</a></li>
									<li><a href="#">Laptops</a></li>
									<li><a href="#">Smartphones</a></li>
									<li><a href="#">Cameras</a></li>
									<li><a href="#">Accessories</a></li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Information</h3>
								<ul class="footer-links">
									<li><a href="#">About Us</a></li>
									<li><a href="#">Contact Us</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Orders and Returns</a></li>
									<li><a href="#">Terms & Conditions</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Service</h3>
								<ul class="footer-links">
									<li><a href="#">My Account</a></li>
									<li><a href="#">View Cart</a></li>
									<li><a href="#">Wishlist</a></li>
									<li><a href="#">Track My Order</a></li>
									<li><a href="#">Help</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="footer-payments">
								<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
							</ul>
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
