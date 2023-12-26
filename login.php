<?php 
session_start();
require "config.php";
require "models/db.php";
require "models/user.php";
?>


<form method="POST" >
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="pass" name="pass" required>
            <?php
                        if (isset($_POST['login'])) {
                            $username = htmlspecialchars($_POST['username']);
                            $password = $_POST['pass'];
                            $hashedPassword = md5($password);
                       
                            // In logins.php
                            $user = new User();
var_dump($user);
                            $result = $user->checkLogon($username, $hashedPassword);
                        
                            if ($result !== false) {
                                $_SESSION['role'] = $result;
                                $_SESSION['user'] = $username;
                        
                                 if ($result == 0) {
                                    header("location:index.php");
                                  } // }else if($result == 1 ){
                                //     header("location:dashboard/index.php");

                                // }
                            } else {
                                echo "Sai tên đăng nhập hoặc mật khẩu";
                            }
                        }   
                    ?>
            <button  name="login" type="submit">Login</button>
        </form>