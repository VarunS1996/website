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
                                <h3 class="display-4">CREATE ACCOUNT</h3>
                                <p class="text-muted mb-4">
                                    <?php

                                if(isset($_POST['submit']))
                                {
                                    $name=$_POST['name'];
                                    $email=$_POST['email'];
                                    $number=$_POST['number'];
                                    $password=$_POST['password'];
                                    $cpassword=$_POST['cpassword'];

                                    if($password==$cpassword)
                                    {
                                        $passwordhash = password_hash($password , PASSWORD_DEFAULT);
                                        $sql = "SELECT * FROM `register` WHERE `Name`='$name'";
                                        $sql1 = "SELECT * FROM `register` WHERE `email`='$email'";
                                        $query = mysqli_query($connection, $sql);
                                        $query1 = mysqli_query($connection, $sql1);
                                        if(mysqli_num_rows($query)>0)
                                        {
                                            echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                    <strong>Name Already Exists..! </strong> Try Using Another Name.
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>';
                                        }
                                        else if(mysqli_num_rows($query1)>0)
                                        {
                                            echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                    <strong>Email Id Already Exists..! </strong> Try Using Another Email Id.
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>';
                                        }
                                        else
                                        {
                                            $sql= "INSERT INTO `register` (`Name`, `Email`, `PhoneNo.`, `Password`, `Date`) VALUES ( '$name', '$email','$number', '$passwordhash', current_timestamp())";
                                            $query = mysqli_query($connection, $sql);
                                            if($query)
                                            {
                                                echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <strong>Success..!</strong> Account Successfully Created. You Can Login Now..!
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>';
                                                
                                                
                                            }
                                            else
                                            {
                                                echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                                <strong>Error!</strong> You should check in on some of those fields below.
                                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>';
                                            }

                                        }

                                    }
                                    else
                                    {
                                        echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                    <strong>Passwords Do Not Match..!</strong> Please Try using the Same Passwords.
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>';
                                    }
                                }


                                ?>
                                </p>
                                <hr><br>
                                <form action="Register.php" method="post">
                                    <!-- name -->
                                    <div class="form-group input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-user"></i>
                                            </span>
                                        </div>
                                        <input id="Name" type="name" name="name" placeholder="Enter Your Name"
                                            class="form-control border-0 shadow-sm px-4" required>
                                    </div>
                                    <!-- email -->
                                    <div class="form-group input-group mb-3">
                                        <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
                                            </div>
                                        <input id="Email" type="email" name="email"
                                            placeholder="Enter Your Email address"
                                            class="form-control border-0 shadow-sm px-4" required>
                                    </div>
                                    <!-- Phone Number -->
                                    <div class="form-group input-group mb-3">
                                        <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-mobile"></i>
                                                </span>
                                            </div>
                                        <input id="number" type="tel" name="number" maxlength="11"
                                            placeholder="Enter Your Phone Number"
                                            class="form-control border-0 shadow-sm px-4" required>
                                    </div>
                                    <!-- password  -->
                                    <div class="form-group input-group mb-3">
                                        <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-lock"></i>
                                                </span>
                                            </div>
                                        <input id="Password" type="password" name="password"
                                            placeholder="Enter Your Password"
                                            class="form-control border-0 shadow-sm px-4 text-primary"
                                            required>
                                    </div>
                                    <!-- confirm password -->
                                    <div class="form-group input-group mb-3">
                                        <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-lock"></i>
                                                </span>
                                            </div>
                                        <input id="CPassword" type="password" name="cpassword"
                                            placeholder="Enter Your Password Once Again"
                                            class="form-control border-0 shadow-sm px-4 text-primary"
                                            required>
                                    </div>

                                    <div class="custom-control custom-checkbox mb-3">
                                        <input id="customCheck1" type="checkbox" checked class="custom-control-input">
                                        <label for="customCheck1" class="custom-control-label">Remember password</label>
                                    </div>
                                    <button type="submit" name="submit"
                                        class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm">Create
                                        Account
                                    </button>
                                    <div class="text-center d-flex justify-content-between mt-4">
                                        <p>Already Have an Account<a href="Login.php" class="font-italic text-muted">
                                                <u>Login Section</u></a></p>
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