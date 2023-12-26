<?php
				require "models/config.php";
				require "models/db.php";
				require "models/protypes.php";
				require "models/manufacture.php";
				require "models/products.php";
				// Xoa san pham ra khoi database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the 'manu_id' parameter is set in the POST data
    if (isset($_POST['manu_id'])) {
        // Get the manufacturer ID from the POST data
        $manu_id = intval($_POST['manu_id']);

        // Create an instance of the Manufacture class
        $manufacture = new Manufacture();

        // Delete the manufacturer from the database
        $deleteResult = $manufacture->deleteManufacture($manu_id);
        header('location: Manufacture.php');
    } else {
        // Handle the case where 'manu_id' parameter is not set in the POST data
        echo "Invalid manufacture ID.";
    }
} else {
    // Handle the case where the form was not submitted using POST
    echo "Invalid form submission.";
}