<?php 
// Tao form

// lay du lieu len form
// cho nguoi dung doi va an nut submit
// kiem tra $_POST
// luu du lieu vao bien
// tao ham update bo tât ca cac bien vao
// tra ve trang dashboard
?>
<?php
require "config.php";
require "models/db.php";
require "models/protypes.php";
require "models/manufacture.php";
require "models/products.php";

$protypes = new Protypes;
$getAllprotypes = $protypes->getAllprotypes();
$product = new Product();
 
$id = " ";
if(isset($_GET['id'])){
    $id = intval($_GET['id']);
    
}

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $manu_id = $_POST['manu_id'];
    $type_id = $_POST['type_id'];
    $price = $_POST['price'];
    $img = $_POST['img'];
    $description = $_POST['description'];
    // $feature = $_POST['feature'];
    $feature = $_POST['feature'];
    $created_at = $_POST['created_at'];


   
  $updateproduct = $product->updateProducts( $id , $name , $manu_id , $type_id , $price , $img  , $description , $feature , $created_at  );
  header('location:Products.php');
  
 


}


$productData = $product->getAllProductsById(intval($id));





?>

<div class="container cs_container ">
  <form action="" method="post">
   

    <label for="lname">nhập tên sản phảm </label>
    <input type="text" id="lname" name="name" placeholder="Your last name.." value="<?php echo $productData->name ?>" >

    <label for="lname">nhập manu_id sản phảm </label>
    <input type="text" id="lname" name="manu_id" placeholder="Your last name.." value="<?php echo $productData->manu_id ?>">

    <label for="lname">nhập type_id sản phảm </label>
    <input type="text" id="lname" name="type_id" placeholder="Your last name.." value="<?php echo $productData->type_id ?>">

    <label for="lname">nhập price sản phảm </label>
    <input type="text" id="lname" name="price" placeholder="Your last name.." value="<?php echo $productData->price ?>">

    <label for="lname">nhập link img  sản phảm </label>
    <input type="text" id="lname" name="img" placeholder="Your last name.." value="<?php echo $productData->image ?>">

    <label for="lname">nhập description sản phảm </label>
    <input type="text" id="lname" name="description" placeholder="Your last name.." value="<?php echo $productData->description ?>">

    <label for="lname">nhập feature sản phảm </label>
    <input type="text" id="lname" name="feature" placeholder="Your last name.." value="<?php echo $productData->feature ?>">

    <label for="lname">nhập created_at sản phảm </label>
    <input type="text" id="lname" name="created_at" placeholder="Your last name.." value="<?php echo $productData->created_at ?>">

    
    <br>

    <input name="submit" type="submit" value="Submit">

  </form>
</div>
<style>

.cs_container input[type=text], select, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
.cs_container input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
.cs_container input[type=submit]:hover {
  background-color: #45a049;
}

/* Add a background color and some padding around the form */
.cs_container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  width: 50%;
}


</style>

