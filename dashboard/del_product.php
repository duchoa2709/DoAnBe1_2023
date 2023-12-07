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
        
        // Delete the product from the database
        $deleteResult = $product->deleteProducts($id);
        unlink($productData->image);

        // Check if the deletion was successful
        if ($deleteResult) {
            // Redirect to the Products page after successful deletion
            header('Location: Products.php');
            exit(); // Ensure that no further code is executed after the redirect
        } else {
            // Handle the case where deletion fails

            echo "Failed to delete the product.";
        }
    } else {
        // Handle the case where 'id' parameter is not set in the POST data
        echo "Invalid product ID.";
    }
} else {
    // Handle the case where the form was not submitted using POST
    echo "Invalid form submission.";
}
?>
