<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard </title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="./dist/css/adminlte.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<?php
require "models/config.php";
require "models/db.php";
require "models/protypes.php";
require "models/manufacture.php";
require "models/products.php";

$protypes = new Protypes;
$getAllprotypes = $protypes->getAllprotypes();

$manufacture = new Manufacture();
$getAllmanufacture = $manufacture->getAllmanufacture();


if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $manu_id = $_POST['manu_id'];
    $type_id = $_POST['type_id'];
    $price = $_POST['price'];
    $img = $_POST['image'];
    $description = $_POST['description'];
    // $feature = $_POST['feature'];
    $feature = isset($_POST['feature']) ? 1 : 0;

    $created_at = date('Y-m-d h:i:s', time());

    $product = new Product();
    $insertProducts = $product->insertProducts($name , $manu_id , $type_id , $price , $img , $description , $feature , $created_at);
    header('location: Products.php');
   

}

?>
<div class="flex">
    <div class="w-1/7">
        <?php
        include('component/slideBar.php');
        ?>
    </div>
    <div class="w-full container cs_container ">
        <form action="" method="post" class="m-10">

            <!-- name -->
            <div class="mb-6">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 text-black">Name</label>
                <input type="text" id="name" name="name"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-200 border-gray-600 placeholder-gray-400 focus:ring-blue-500 focus:border-blue-500 shadow-sm-light"
                    placeholder="Nhập tên sản phẩm" required>
            </div>

            <!-- description -->
            <div class="mb-6">
                <label for="description"
                    class="block mb-2 text-sm font-medium text-gray-900 text-black">Description</label>
                <input type="text" id="description" name="description"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-200 border-gray-600 placeholder-gray-400 focus:ring-blue-500 focus:border-blue-500 shadow-sm-light"
                    placeholder="Nhập mô tả sản phẩm" required>
            </div>

            <!-- hình ảnh -->
            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900" for="img-product">Upload
                    Image</label>
                <div class="flex items-center ">
                    <div class="mt-1 text-sm text-gray-500 text-gray-300" id="user_avatar_help">
                        <div class="relative hidden w-28  h-28 object-contain mr-3 rounded-full md:block">
                            <img class="object-contain w-full h-full " alt="" loading="lazy" id="output"
                                src="./image/imageDefault.png" />
                            <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true">
                            </div>
                        </div>
                    </div>
                    <input id="image" type="file" name="image" accept="image/*" onchange="loadFile(event)"
                        class=" p-2 block h-12 w-full text-sm text-gray-500 border border-gray-300 rounded-lg cursor-pointer bg-white  focus:outline-none border-gray-600 placeholder-gray-400"
                        aria-describedby="user_avatar_help">
                </div>
                <div class="mt-1 text-sm text-black" id="user_avatar_help">Tải hình ảnh sản phẩm lên</div>
            </div>

            <!-- price -->
            <div class="mb-6">
                <label for="price" class="block mb-2 text-sm font-medium text-gray-900 text-black">Price</label>
                <input type="number" id="price" name="price"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-200 border-gray-600 placeholder-gray-400 focus:ring-blue-500 focus:border-blue-500 shadow-sm-light"
                    placeholder="Nhập giá sản phẩm" required>
            </div>

            <!-- Protypes -->
            <div class="mb-6">
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 text-black">Choose
                    Protypes classification</label>
                <select id="categorie" name="type_id"
                    class="bg-white border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 border-gray-600 placeholder-gray-400 focus:ring-blue-500 focus:border-blue-500">
                    <?php
                  foreach ($getAllprotypes as $value) :
                ?>
                    <option value="<?php echo $value['type_id'] ?>"><?php echo $value['type_name'] ?></option>
                    <?php
                  endforeach;
                ?>
                </select>
            </div>

            <div class="mb-6">
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 text-black">Choose
                    manufacture classification</label>
                <select id="manufacture" name="manu_id"
                    class="bg-white border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 border-gray-600 placeholder-gray-400 text-black focus:ring-blue-500 focus:border-blue-500">
                    <?php 
                  foreach ($getAllmanufacture as $value) :
                ?>
                    ?>
                    <option value="<?php echo $value['manu_id'] ?>"><?php echo $value['manu_name'] ?></option>
                    <?php
                  endforeach;
                ?>
                </select>
            </div>

            <div class="flex items-center">
                <label for="checked-checkbox" class="mb-0 text-sm font-medium text-black mr-2">Checked
                    state</label>
                <input checked id="checked-checkbox" type="checkbox" value="" name="feature"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            </div>
            <div class="flex justify-end">
                <button name="submit" type="submit" value="Submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800 mt-2">Add
                    Product</button>
            </div>
        </form>
    </div>
</div>