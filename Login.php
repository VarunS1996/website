<?php
    require 'partials/_dbconnect.php';
    

    session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css">
    <link rel="stylesheet" href="css/Login.css">
    <title>GAMING GREEKS</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row no-gutter">
            <!-- The image half -->
            <div class="col-md-6 d-none d-md-flex bg-image"><h1 style="margin:auto;font-size:5vw;color:white;box-shadow:0 0 20px;margin-top:25vh">GAMING GREEKS</h1></div>


            <!-- The content half -->
            <div class="col-md-6 bg-light">
                <div class="login d-flex align-items-center py-5">

                    <!-- Demo content-->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 col-xl-7 mx-auto">
                                <h3 class="display-4">ACCOUNT LOGIN</h3>
                                <p class="text-muted mb-4">
                                <?php

                                if(isset($_POST['submit']))
                                {
                                    
                                    $email=$_POST['email'];
                                    $password=$_POST['password'];

                                    
                                    $sql = "SELECT * FROM `register` WHERE `Email`='$email'";
                                    $sql2 = "SELECT * FROM `admin` WHERE `ADMIN`='$email' AND `ADMINPASS` ='$password'";
                                    $query = mysqli_query($connection, $sql);
                                    $query2 = mysqli_query($connection, $sql2);
                                       
                                        if(mysqli_num_rows($query2) == 1)
                                        {
                                            $row=mysqli_fetch_assoc($query2);
                                            $username=$row['ADMIN_NAME'];
                                            $_SESSION['username']=$username;
                                            header('location:admin_panel.php'); 
                                            
                                        }
                                        else if(mysqli_num_rows($query) == 1)
                                        {
                                            $row=mysqli_fetch_assoc($query);
                                            $username=$row['Name'];
                                            $pass=$row['Password'];
                                            $pass_verify = password_verify($password , $pass);
                                            if($pass_verify)
                                            {
                                                $_SESSION['username']=$username;
                                                header('location:Homepage.php');   
                                            }
                                            else
                                            {
                                                echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                            <strong>Incorrect Password..!!</strong>Try Using Valid Password.
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>';
                                            }
                                        }
                                        else
                                        {
                                            echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                            <strong>Invalid Credentials..!</strong>Try Using Valid Email ID and Password.
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>';
                                        }
                                    
                                }

                            
                                ?>

                                </p><hr><br>
                                <form action="" method="post">
                                    <!-- email -->
                                    <div class="form-group input-group mb-3">
                                        <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
                                            </div>
                                        <input id="Email" type="email" name="email" placeholder="Enter Your Email address"
                                            class="form-control border-0 shadow-sm px-4">
                                    </div>
                                    <!-- password -->
                                    <div class="form-group input-group mb-3">
                                            <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-lock"></i>
                                                    </span>
                                                </div>
                                        <input id="Password" type="password" name="password" placeholder="Enter Your Password"
                                            class="form-control border-0 shadow-sm px-4 text-primary">
                                    </div>
                                    <div class="custom-control custom-checkbox mb-3">
                                        <input id="customCheck1" type="checkbox" checked class="custom-control-input">
                                        <label for="customCheck1" class="custom-control-label">Remember password</label>
                                    </div>
                                    <button type="submit" name="submit"
                                        class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm">Log
                                        in</button>
                                    <div class="text-center d-flex justify-content-between mt-4">
                                        <p>New User..!<a href="Register.php" class="font-italic text-muted">
                                                <u>Create Account</u></a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!-- End -->
                </div>
            </div><!-- End -->
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>