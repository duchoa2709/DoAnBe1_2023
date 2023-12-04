<?php  session_start();
require "config.php";
require "models/db.php";
require "models/user.php";

$user = new User();



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
       
        <form action="" method="POST">
          <!-- Email input -->
                      <div class="form-outline mb-4 mt-5">

                      <label class="form-label" for="form3Example3">Username</label>
                        <input name="username" type="text" id="form3Example3" class="form-control form-control-lg"
                          />
                        
                      </div>

                      <!-- Password input -->
                      <div class="form-outline mb-3">
                      <label class="form-label" for="form3Example4">Password</label>
                        <input name="password" type="password" id="form3Example4" class="form-control form-control-lg"
                          />
                      
                      </div>
                      <?php 
                      if (isset($_POST['submit'])) {

                        $username = $_POST['username'];
                        $password = $_POST['password'];
                        if($user->checkLogon($username , $password)){
                          if($username == "admin" && $password == "12345"){
                            header('location:AdminLTE-3/index.php');
                          }
                          else{
                            $_SESSION['user'] = $username;
                            header('location:index.php');

                          }
                           
                  
                        }
                        else{
                           echo "<p class='text_red' > Sai Username Hoặc Password </p>";
                        }
                        
                        
                        }
                      ?>
                      
                    

                      <div class="d-flex justify-content-between align-items-center">
                        <!-- Checkbox -->
                        <div class="form-check mb-0">
                          <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                          <label class="form-check-label" for="form2Example3">
                            Remember me
                          </label>
                        </div>
                        <a href="#!" class="text-body">Forgot password?</a>
                      </div>

                      <div class="text-center text-lg-start mt-4 pt-2">
                      
                          <input name="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;" type="submit" value="Login">

                        <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? 
                          <a href="Register.php" class="link-danger">Register</a></p>
                      </div>

        </form>
      
      </div>
    </div>
  </div>

</section>
<style>
  .text_red {
    color: red;
  }

</style>
    
</body>
</html>