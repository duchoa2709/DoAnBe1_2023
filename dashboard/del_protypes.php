<?php
require "models/config.php";
require "models/db.php";
require "models/protypes.php";
require "models/manufacture.php";
require "models/products.php";

// lay ID
if(isset($_POST['id'])){
    $type_id = intval($_POST['id']) ;
    // Tao ham delete prepare id
    $protypes = new Protypes();
    $deleteProtype = $protypes->deleteProtypes($type_id);
    $_SESSION['notification'] = "Xóa thành công";
    header('location:Protypes.php');
} else {
    $_SESSION['nofication'] = "Xóa thất bại";
    header('location:Protypes.php');
}
