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
require "models/config.php";
require "models/db.php";
require "models/protypes.php";
require "models/manufacture.php";
require "models/products.php";




$id = " ";
if(isset($_GET['id'])){
    $id = intval($_GET['id']);
    
}

$protypes = new Protypes;
$getAllprotypes = $protypes->getAllprotypes();

$manufacture = new Manufacture();
$getAllmanufacture = $manufacture->getAllmanufacture();

$product = new Product();
$productData = $product->getAllProductsById(intval($id));

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $manu_id = $_POST['manu_id'];
    $type_id = $_POST['type_id'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $feature = isset($_POST['feature']) ? 1 : 0;
    $created_at = date('Y-m-d h:i:s', time());

    $file_names = array();
    if(isset($_FILES['images'])){
        $file_names = array();
        foreach($_FILES['images']['tmp_name'] as $key => $tmp_name){
            // Process each uploaded file
            // For example, move the file to your uploads directory:
            $timestamp = time();
            $file_extension = pathinfo($_FILES['images']['name'][$key], PATHINFO_EXTENSION);
            $file_name = $timestamp .'_' .$_FILES['images']['name'][$key]. '.' . $file_extension;
            $product_photo = '../public/upload/' . $file_name;
            if( is_uploaded_file($_FILES['images']['tmp_name'][$key]) &&
                move_uploaded_file($_FILES['images']['tmp_name'][$key], $product_photo)) {
                    // Upload thành công thì thêm vào db;
                    array_push($file_names, $product_photo);
            } else {
                $_SESSION['error'] = "Vui lòng chọn hình ảnh";
            }
        }
        // Now $file_names contains all the paths of the uploaded files
        // Convert the array to a string
        $file_names_string = implode(",", $file_names);
        // You can now use this string to update your product
        if($updateproduct = $product->updateProducts( $id , $name , $manu_id , $type_id , $price , $file_names_string , $description , $feature , $created_at )) {
            $_SESSION['nofication'] = "Sửa thành công";
            header('location: Products.php');
        }
    }
}
?>

<script src="..\public\js\app.js"></script>

<div class="flex">
    <div class="w-1/7">
        <?php
        include('component/slideBar.php');
        ?>
    </div>
    <div class="w-full container ">
        <form action="" method="post" class="m-10" enctype="multipart/form-data">

            <!-- name -->
            <div class="mb-6">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 text-black">Name</label>
                <input type="text" id="name" name="name"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-200 border-gray-600 placeholder-gray-400 focus:ring-blue-500 focus:border-blue-500 shadow-sm-light"
                    placeholder="Nhập tên sản phẩm" required value="<?php echo $productData->name?>">
            </div>

            <!-- description -->
            <div class="mb-6">
                <label for="description"
                    class="block mb-2 text-sm font-medium text-gray-900 text-black">Description</label>
                <input type="text" id="description" name="description"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-200 border-gray-600 placeholder-gray-400 focus:ring-blue-500 focus:border-blue-500 shadow-sm-light"
                    placeholder="Nhập mô tả sản phẩm" required value="<?php echo $productData->description?>">
            </div>

            <!-- hình ảnh -->
            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900" for="img-product">Upload
                    Image</label>
                <div class="flex items-center ">
                    <div class="mt-1 text-sm text-gray-500 text-gray-300" id="user_avatar_help">
                        <div class="relative hidden w-28  h-28 object-contain mr-3 rounded-full md:block">
                            <img class="object-contain w-full h-full " alt="" loading="lazy" id="output"
                                src="<?php echo $productData->image?>">
                            <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true">
                            </div>
                        </div>
                    </div>
                    <input id="image" type="file" name="images[]" accept="image/*" onchange="loadFile(event)"
                        class="p-2 block h-12 w-full text-sm text-gray-500 border border-gray-300 rounded-lg cursor-pointer bg-white focus:outline-none border-gray-600 placeholder-gray-400"
                        aria-describedby="user_avatar_help" multiple>
                </div>
                <div class="mt-1 text-sm text-black" id="user_avatar_help">Tải hình ảnh sản phẩm lên</div>
            </div>

            <!-- price -->
            <div class="mb-6">
                <label for="price" class="block mb-2 text-sm font-medium text-gray-900 text-black">Price</label>
                <input type="number" id="price" name="price"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-200 border-gray-600 placeholder-gray-400 focus:ring-blue-500 focus:border-blue-500 shadow-sm-light"
                    placeholder="Nhập giá sản phẩm" required value="<?php echo $productData->price?>">
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
                    <option value="<?php echo $value['type_id'] ?>"
                        <?php if($value['type_id'] == $productData->type_id) echo "selected"?>>
                        <?php echo $value['type_name'] ?></option>
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
                    <option value="<?php echo $value['manu_id'] ?>"
                        <?php if($value['manu_id'] == $productData->manu_id) echo "selected"?>>
                        <?php echo $value['manu_name'] ?></option>
                    <?php
                  endforeach;
                ?>
                </select>
            </div>

            <div class="flex items-center">
                <label for="checked-checkbox" class="mb-0 text-sm font-medium text-black mr-2">Checked
                    state</label>
                <input id="checked-checkbox" type="checkbox" name="feature"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                    <?php echo ($productData->feature == 1) ? 'checked' : ''; ?>>
            </div>



            <div class="flex justify-end">
                <button name="submit" type="submit" value="Submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800 mt-2">Edit
                    Product</button>
            </div>
        </form>
    </div>
</div>