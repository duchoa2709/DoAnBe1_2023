<?php
require "models/config.php";
require "models/db.php";
require "models/products.php";

// Check if the form has been submitted using POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the 'id' parameter is set in the POST data
    if (isset($_POST['id'])) {
        // Get the product ID from the POST data
        $id = intval($_POST['id']);
        
        // Create an instance of the Product class
        $product = new Product();
        $productData = $product->getAllProductsById(intval($id));

        // Get all image paths
        $imagePaths = explode(',', $productData->image);

        // Delete the product from the database
        $deleteResult = $product->deleteProducts($id);

        // Delete all images
        foreach ($imagePaths as $imagePath) {
            $imagePath = trim($imagePath); // Remove any whitespace
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        // Check if the deletion was successful
        if ($deleteResult) {
            // Redirect to the Products page after successful deletion
            $_SESSION['nofication'] = "Xóa thành công";
            header('Location: Products.php');
            exit(); // Ensure that no further code is executed after the redirect
        } else {
            // Handle the case where deletion fails
            $_SESSION['error'] = "Xóa thất bại";
        }
    } else {
        // Handle the case where 'id' parameter is not set in the POST data
        $_SESSION['error'] = "Không tìm thấy sản phẩm";
    }
} else {
    // Handle the case where the form was not submitted using POST
    $_SESSION['error'] = "Không tìm thấy sản phẩm";
}
?>
