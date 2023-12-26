<?php
require "config.php";
require "models/db.php";
require "models/user.php";
$user= new User();


$inserdata = $user->InsertData($_GET['user'] , $_GET['pwd']);
header('location:logins.php');




?>
