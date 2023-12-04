<?php 
require_once "config.php";
require_once "models/db.php";;
require_once "models/products.php";
$cartProduct= new Product();
$cartgetAllProducts = $cartProduct->getAllProducts();








if( isset($_GET['id']) && isset($_GET['action']) && $_GET['action'] == 'add_to_cart')
{
    $sl = 1;
    if(isset($_GET['sluong'])) {
        $sl = $_GET['sluong'];
    }
    
    $id = $_GET['id'];

    if(isset($_SESSION['cart'][$id])){
        $_SESSION['cart'][$id]['soluong'] += $sl;
    }
    else{
        $_SESSION['cart'][$id]['soluong'] = $sl;
    }
    
}
$count = 0;

if(isset($_SESSION['cart'])){
    foreach($_SESSION['cart'] as $key => $value) : 

        foreach($cartgetAllProducts as $sp):
            if($key == $sp['id']):
                $count++;
        
             endif ; endforeach; endforeach; 

}
?>

<style>
.delete a{
    color : white;

}
</style>

<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
        <i class="fa fa-shopping-cart"></i>
        <span>Your Cart</span>
        <div class="qty"><?php echo $count ?></div>
    </a>
    <div class="cart-dropdown">
        <div class="cart-list">

        <?php 

       
        if(isset($_SESSION['cart'])):
            foreach($_SESSION['cart'] as $key => $value) : 

                foreach($cartgetAllProducts as $sp):
                    if($key == $sp['id']):
                        $count++;

        
       
        ?> 
            <div class="product-widget">
                <div class="product-img">
                    <img src="./img/<?php echo $sp['image'] ?>" alt="">
                </div>
                <div class="product-body">
                    <h3 class="product-name"><a href="#"><?php echo $sp['name'] ?></a></h3>
                    <h4 class="product-price"><span class="qty"><?php echo $value['soluong'] ?>x</span><?php  echo number_format($sp['price']) ?></h4>
                </div>
                <button class="delete">
                <a href="del.php?id=<?php echo $sp['id'] ?>"><i class="fa fa-close"></i></a>    
                </button>
            </div>

            <?php endif ; endforeach; endforeach; endif; ?>
        </div>
        <div class="cart-summary">
          
            <h5>SUBTOTAL: $2940.00</h5>
        </div>
        <div class="cart-btns">
            <a href="addtocart.php">View Cart</a>
            <a href="checkout.php">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>





   
  
   
  







