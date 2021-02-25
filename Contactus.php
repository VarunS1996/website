<?php

require 'partials/_dbconnect.php';

    session_start();

    if(!isset($_SESSION['username']))
    {
        header('location:Login.php');
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
    <link rel="stylesheet" href="css/style.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="css/media-queries.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css">
    <style>
    .body-image {
        background-image: url('images/contact.jpg');
        background-size: cover;
        background-position: center center;
        margin: 0;
    }
    </style>
    <title>Gaming Greeks</title>
</head>

<body>
    <div class="body-image">
        <header>
            <?php
            include ('partials/_nav.php');
        ?>
        </header>
        <?php

        if(isset($_POST['submit']))
        {
            $Name=$_POST['name'];
            $Email=$_POST['email'];
            $Number=$_POST['number'];
            $Description=$_POST['Desc'];

            $sql="INSERT INTO `contactus` (`Name`, `Email`, `Number`, `Description`, `log`) VALUES ('$Name', '$Email', '$Number', '$Description', current_timestamp())";
            $result = mysqli_query($connection, $sql);
            if($result)
            {
                // $to_email = "receipient@gmail.com";
                // $subject = "Simple Email Test via PHP";
                // $body = "Hi, This is test email send by PHP Script";
                // $headers = "From: Gaming Greeks";

                // if (mail($Email, $subject, $body, $headers))
                // {
                //     echo'   <div class="alert alert-success alert-dismissible fade show" role="alert">
                //     <strong>Sucess..!!</strong> Your Query Has Been Submitted Successfully and a mail Sent to Your email address $Email..! 
                //     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                //         <span aria-hidden="true">&times;</span>
                //    </button>
                //    </div>';
                    
                // } 
                // else {
                //  echo "Email sending failed...";
                // }
                echo'   <div class="alert alert-success alert-dismissible fade show" role="alert">
                   <strong>Success..!!</strong> Your Query Has Been Submitted Successfully..!
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                  </button>
                  </div>';
                      
            }
        }
        
        
    ?>


        <!-- Contact Us -->

        <div class="container contact">
            <h2>CONTACT US</h2>
            <br>
            <hr>
            <form action="Contactus.php" method="post">
                <div class="form-group">
                    <label for="Name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your Name"
                        required>
                </div>
                <div class="form-group">
                    <label for="Email Address">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com"
                        required>
                </div>
                <div class="form-group">
                    <label for="Contact Number">Contact Number</label>
                    <input type="tel" name="number" class="form-control" id="number"
                        placeholder="Enter Your Contact Number" required>
                </div>
                <div class="form-group">
                    <label for="Description">Enter Your Query</label>
                    <textarea class="form-control" name="Desc" id="Desc" placeholder="Write Your Query Here" rows="5"
                        required></textarea>
                </div>
                <button class="btn btn-success p-2" name="submit">SUBMIT</button>
            </form>
        </div>

        <!-- Footer -->
        <footer>
            <?php
            include ('partials/_footer.php');
        ?>
        </footer>
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