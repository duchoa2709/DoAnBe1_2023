<?php 
// In ra cai form

// Cho admin nhap vo
// an nut button 
// kiem tra $_POST
// lay data dan vao trong bien
// tao ham insert 
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
$manufacture = new Manufacture();

if(isset($_POST['submit'])){
    $manu_name = $_POST['name'];
  

    $product = new Product();
    $insertManufacture = $manufacture->insertManufacture($manu_name);
   header('location:Manufacture.php');

}


?>

<div class="flex">
    <div class="w-1/7">
        <?php
        include('slideBar.php');
        ?>
    </div>
    <div class="w-full container ">
        <form action="" method="post" class="m-10">
            <!-- name -->
            <div class="mb-6">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 text-black">Name Manufacture</label>
                <input type="text" id="name" name="name"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-200 border-gray-600 placeholder-gray-400 focus:ring-blue-500 focus:border-blue-500 shadow-sm-light"
                    placeholder="Nhập tên sản phẩm" required>
            </div>

            <div class="flex justify-end">
                <button name="submit" type="submit" value="Submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800 mt-2">Add
                    Manufacture</button>
            </div>

        </form>
    </div>
    <style>
    .cs_container input[type=text],
    select,
    textarea {
        width: 100%;
        /* Full width */
        padding: 12px;
        /* Some padding */
        border: 1px solid #ccc;
        /* Gray border */
        border-radius: 4px;
        /* Rounded borders */
        box-sizing: border-box;
        /* Make sure that padding and width stays in place */
        margin-top: 6px;
        /* Add a top margin */
        margin-bottom: 16px;
        /* Bottom margin */
        resize: vertical
            /* Allow the user to vertically resize the textarea (not horizontally) */
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
        margin: auto;
    }
    </style>