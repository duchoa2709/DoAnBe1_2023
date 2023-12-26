<?php
session_start();
require "config.php";
require "models/db.php";
require "models/user.php";
$user = new User();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login V3</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="./public/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./public/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./public/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./public/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./public/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./public/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./public/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./public/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./public/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./public/css/util.css">
    <link rel="stylesheet" type="text/css" href="./public/css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url('./public/images/bg-01.jpg');">
            <div class="wrap-login100">
                <form class="login100-form validate-form" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>"
                    name="login">
                    <span class="login100-form-logo">
                        <i class="zmdi zmdi-landscape"></i>
                    </span>

                    <span class="login100-form-title p-b-34 p-t-27">
                        Log in
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Enter username">
                        <input class="input100" type="text" name="username" placeholder="Username">
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password" name="pass" placeholder="Password">
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
                    </div>

                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                        <label class="label-checkbox100" for="ckb1">
                            Remember me
                        </label>
                    </div>

                    <?php

                        if (isset($_POST['login'])) {
                            $username = htmlspecialchars($_POST['username']);
                            $password = $_POST['pass'];
                        
                            $result = $user->checkLogon($username, $password);
                        
                            if ($result !== false) {
                                $_SESSION['role'] = $result;
                                $_SESSION['user'] = $username;
                        
                                if ($result == 1) {
                                    header("location:AdminLTE-3/index.php");
                                    exit();
                                } else if ($result == 0) {
                                    header("location:index.php");
                                    exit();
                                }
                            } else {
                                echo "Sai tên đăng nhập hoặc mật khẩu";
                            }
                        }
                    ?>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" name="login" type="submit">
                            Login
                        </button>
                    </div>
                    <div class="text-center p-t-90">
                        <a class="txt1" href="register.php">
                            Register
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="./public/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="./public/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="./public/vendor/bootstrap/js/popper.js"></script>
    <script src="./public/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="./public/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="./public/vendor/daterangepicker/moment.min.js"></script>
    <script src="./public/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="./public/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="./public/js/main.js"></script>

</body>

</html>