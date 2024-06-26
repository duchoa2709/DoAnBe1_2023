<?php  session_start();

$product= new Product;
$getAllProducts = $product->getAllProducts();

$count = 0;

if(isset($_SESSION['wishlist'])){
	foreach($_SESSION['wishlist'] as $key => $value){
		$count = $count + $value;
	}
}
$protypes = new Protypes;
$getAllprotypes = $protypes->getAllprotypes();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Electro - HTML Ecommerce Template</title>

    <!-- Google font -->
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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <style>
    /* Customize scrollbar for Chrome, Safari and Opera */
    body::-webkit-scrollbar {
        width: 1rem;
    }

    body::-webkit-scrollbar-track {
        box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        background-color: #1e1f29;
    }

    body::-webkit-scrollbar-thumb {
        background-color: red;
    }

    /* Customize scrollbar for IE and Edge */
    body {
        scrollbar-width: thin;
        scrollbar-color: darkgrey slategrey;
    }
    </style>
</head>

<body>
    <!-- HEADER -->
    <header>
        <!-- TOP HEADER -->
        <div id="top-header">
            <div class="container">
                <ul class="header-links pull-left">
                    <li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
                    <li><a href="#"><i class="fa fa-envelope-o"></i> email@email.com</a></li>
                    <li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li>

                </ul>
                <ul class="header-links pull-right">
                    <li>
                        <p>
                            <i class="fa fa-dollar"> </i> <a href="logins.php">
                                <?php if( isset($_SESSION['user'])  )
							{
								echo $_SESSION['user'];
							}
							else{
								echo "My Account";
							}
							?>
                            </a>
                        </p>
                    </li>
                    <li><a href="contact.php"><i class="fa-solid fa-address-book"></i> Contact</a></li>
                    <li><a href="logout.php">
                            <?php 
						if(isset($_SESSION['user'])){

							echo "Logout";
						}
						else{
							echo " ";
						}
						?>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /TOP HEADER -->

        <!-- MAIN HEADER -->
        <div id="header">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- LOGO -->
                    <div class="col-md-3">
                        <div class="header-logo">
                            <a href="index.php" class="logo">
                                <img src="./img/logo.png" alt="">

                            </a>
                        </div>
                    </div>
                    <!-- /LOGO -->

                    <!-- SEARCH BAR -->
                    <div class="col-md-6">
                        <div class="header-search">
                            <form method="GET" action="store_search.php">
                                <select class="input-select" name="type_id">
                                    <?php foreach ($getAllprotypes as $value) : ?>
                                    <option value="<?php echo $value['type_id'] ?>"
                                        <?php if (isset($_GET['type_id']) && $_GET['type_id'] == $value['type_id']) { echo "selected"; } ?>>
                                        <?php echo $value['type_name'] ?>
                                    </option>
                                    <?php endforeach ?>
                                </select>
                                <input name="keyword" class="input" placeholder="Search here"
                                    value="<?php if (isset($_GET['keyword'])) { echo $_GET['keyword']; } ?>">
                                <button class="search-btn">Search</button>
                            </form>
                        </div>
                    </div>
                    <!-- /SEARCH BAR -->

                    <!-- ACCOUNT -->
                    <div class="col-md-3 clearfix">
                        <div class="header-ctn">
                            <!-- Wishlist -->
                            <div>
                                <a href="wishlist.php">
                                    <i class="fa fa-heart-o"></i>
                                    <span>

                                        Your Wishlist</span>
                                    <div class="qty">

                                        <?php echo $count; ?>
                                    </div>
                                </a>
                            </div>
                            <!-- /Wishlist -->

                            <!-- Cart -->

                            <div class="dropdown cs-dropdown-cart">
                                <?php include_once ("addcart.php")?>
                            </div>
                            <!-- /Cart -->

                            <!-- Menu Toogle -->
                            <div class="menu-toggle">
                                <a href="#">
                                    <i class="fa fa-bars"></i>
                                    <span>Menu</span>
                                </a>
                            </div>
                            <!-- /Menu Toogle -->
                        </div>
                    </div>
                    <!-- /ACCOUNT -->
                </div>
                <!-- row -->

            </div>
            <!-- container -->
        </div>
        <!-- /MAIN HEADER -->
    </header>
    <!-- /HEADER -->

    <!-- NAVIGATION -->
    <nav id="navigation">
        <!-- container -->
        <div class="container">
            <!-- responsive-nav -->
            <div id="responsive-nav">


                <!-- NAV -->
                <ul class="main-nav nav navbar-nav">

                    <li class="active"><a href="#">
                            <?php
						foreach($getAllprotypes  as $key => $value):
						if($key == 0):
							?>
                    <li><a
                            href="danhmuc.php?type_id=<?php echo $value['type_id'] ?>"><?php echo $value['type_name'] ?></a>
                    </li>




                    <?php endif; endforeach; ?>




                    </a></li>
                    <?php
						 foreach($getAllprotypes  as $key => $value):
						 if($key != 0):
						 ?>

                    <li><a
                            href="danhmuc.php?type_id=<?php echo $value['type_id'] ?>"><?php echo $value['type_name'] ?></a>
                    </li>
                    <?php endif; endforeach?>


                </ul>

                <!-- /NAV -->
            </div>
            <!-- /responsive-nav -->
        </div>
        <!-- /container -->
    </nav>

    <!-- /NAVIGATION -->