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

if(isset($_GET['keyword'])){
    $key = $_GET['keyword'];

}

$product = new Product();
$search = $product->search($key);

?>



<?php include('header.php') ?>
<?php foreach($search as $value): ?>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
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

            </div>
        </div>
    </div>


<?php endforeach; ?>
