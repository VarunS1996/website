<?php

    session_start();

    if(!isset($_SESSION['username']))
    {
        header('location:Login.php');
    }

        require ('partials/_dbconnect.php');
    $sql = "SELECT * FROM `admin`";
    $query = mysqli_query($connection, $sql);
    if(mysqli_num_rows($query) == 1)
        {
            $row=mysqli_fetch_assoc($query);
            $emailid=$row['ADMIN'];
            $pass=$row['ADMINPASS'];
            $phone=$row['Phone_No'];
            $_SESSION['emailid']=$emailid;
            $_SESSION['phoneno']=$phone;
            $_SESSION['pass']=$pass;
            
                                            
        }
    
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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/media-queries.css">
    <link rel="stylesheet" href="css/adminpanel.css">
    <title>GAMING GREEKS</title>
</head>

<body>
    <!-- header  -->
    <header>
        <?php
                include ('partials/_adminnav.php');
            ?>
    </header>

    <!-- DASHBOARD  -->
    <div class="wrapper">

        <nav id="sidebar">
            <ul class="lisst-unstyled components">

                <span class="heading">CORE</span>
                <li>
                    <a id="link" href="admin_panel.php"><i class="fas fa-tachometer-alt"></i>&nbsp;&nbsp;DashBoard</a>
                </li>
                <li>
                    <a id="link" href="Profile.php"><i class="fas fa-user-circle"></i>&nbsp;&nbsp;Profile</a>
                </li>
                <span class="heading">ACCOUNTS</span>
                <li>
                    <a id="link" href="UserAccount.php"><i class="fas fa-users"></i>&nbsp;&nbsp;User Accounts</a>
                </li>
                <span class="heading">ASSETS</span>
                <li>
                    <a id="link" href="Policy.php"><i class="fas fa-landmark"></i>&nbsp;&nbsp;Policy</a>
                </li>
                <li>
                    <a id="link" href="Query.php"><i class="fas fa-phone-square-alt"></i>&nbsp;&nbsp;Query</a>
                </li>

            </ul>
        </nav>


        <div id="content">
        <?php

                        if($_SERVER['REQUEST_METHOD']=='POST')
                        {
                            $name=$_POST['name'];
                            $mail=$_POST['mail'];
                            $password=$_POST['password'];
                            $number=$_POST['number'];

                            $sql3="UPDATE `admin` SET `ADMIN_NAME`='$name', `ADMIN`='$mail', `ADMINPASS`='$password', `Phone_no`='$number' ";
                            $result=mysqli_query($connection , $sql3);

                            if($result)
                            {
                                echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                            <strong></strong>Your Profile Has Been Successfully Updated...!!
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>';
                            }
                        }

                    ?>
            <div class="container-fluid">
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="m-t-30"> <img src="images/user.png" class="rounded-circle mb-3"
                                        width="150">
                                    <h4 class="card-title m-t-10"><?php  echo $_SESSION['username'];?></h4>
                                    <h6 class="card-subtitle">Website Administrator</h6>
                                </center>
                            </div>
                            <div>
                                <hr>
                            </div>
                            <div class="card-body"> <small class="text-muted">Email address </small>
                                <h6><?php  echo $_SESSION['emailid'];?></h6> <small
                                    class="text-muted p-t-30 db">Phone</small>
                                <h6>+91<?php  echo $_SESSION['phoneno'];?></h6>

                                <small class="text-muted p-t-30 db">Social Profile</small>
                                <br>
                                <button class="btn btn-circle btn-secondary"><i class="fab fa-facebook-f"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="fab fa-twitter"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="fab fa-instagram"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    
                    <div class="col-lg-7 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material" action="Profile.php" method="POST">
                                    <div class="form-group">
                                        <label class="col-md-12">Full Name</label>
                                        <div class="col-md-6">
                                            <input type="text" name="name" placeholder="Enter Your Name"
                                                class="form-control form-control-line"
                                                value="<?php  echo $_SESSION['username'];?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-6">
                                            <input type="email" name="mail" placeholder="Enter Your Email Address"
                                                class="form-control form-control-line" name="example-email"
                                                id="example-email" value="<?php  echo $_SESSION['emailid'];?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Password</label>
                                        <div class="col-md-6">
                                            <input type="password" name="password" id="myInput" class="form-control form-control-line"
                                                value="<?php  echo $_SESSION['pass'];?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Phone No</label>
                                        <div class="col-md-6">
                                            <input type="text" name="number" placeholder="Enter Your Phone Number"
                                                class="form-control form-control-line"
                                                value="<?php  echo $_SESSION['phoneno'];?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success">Update Profile</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <footer>
        <?php
            include ('partials/_footer.php');
        ?>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <script>
    $(document).ready(function() {
        $('#sidebarCollapse').on('click', function() {
            $('#sidebar').toggleClass('active');
        });
    });
    </script>

</body>

</html>