<?php
	require "config.php";
	require "models/db.php";
	require "models/protypes.php";
	require "models/manufacture.php";
	require "models/products.php";

    $product= new Product;	

  

?>
   
    <?php


if(isset($_POST['action']) && $_POST['action'] == 'ajax_product'):
    // lay category
    $brand = null;
    $category = null;
  

    
    $sql = "SELECT * FROM products where 1  ";
    if(isset($_POST['brand'])) {
      
        $brand = $_POST['brand'];
        $brandImplode = implode("','", $brand);
        $sql .= " AND manu_id in ('".$brandImplode."')";
    }

    if(isset($_POST['category'])) {
     
        $category = $_POST['category'];
        $categoryImplode = implode("','", $category);
        $sql .= " AND type_id  in ('".$categoryImplode."')";
    }
    

   $getAllProductsByQuery = $product->getAllProductsByQuery($sql);
?>


<?php 
    foreach($getAllProductsByQuery as $value):
    ?>
  
    <div class="product">
        <div class="product-img">
            <img src="./img/<?php echo $value['image'] ?>" alt="">
            <div class="product-label">
                <span class="sale">-30%</span>
                <span class="new">NEW </span>
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


   
    
    <?php endforeach; ?>

    <?php 
    if(count($getAllProductsByQuery) == 0){
        echo "No Data Found";
    }
    ?>
<?php endif; ?>
  





 
