<?php

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

            <div class="card">
                <div class="card-header">
                    PRIVACY POLICY
                </div>
                <div class="card-body">
                    <h5 class="card-title display-4">Privacy Policy || Issued By Gaming Greeks..!!</h5>
                    <br>
                    <p class="card-text">Your privacy is important to us. It is <strong>Gaming Greeks</strong> policy to respect your
                        privacy regarding any information we may collect from you across our website,
                        <em>http://www.gaminggreeks.com</em>, and other sites we own and operate.<br><br>

                        We only ask for personal information when we truly need it to provide a service to you. We
                        collect it by fair and lawful means, with your knowledge and consent. We also let you know why
                        we’re collecting it and how it will be used.<br><br>

                        We only retain collected information for as long as necessary to provide you with your requested
                        service. What data we store, we’ll protect within commercially acceptable means to prevent loss
                        and theft, as well as unauthorized access, disclosure, copying, use or modification.<br><br>

                        We don’t share any personally identifying information publicly or with third-parties, except
                        when required to by law.<br><br>

                        Our website may link to external sites that are not operated by us. Please be aware that we have
                        no control over the content and practices of these sites, and cannot accept responsibility or
                        liability for their respective privacy policies.<br><br>

                        You are free to refuse our request for your personal information, with the understanding that we
                        may be unable to provide you with some of your desired services.<br><br>

                        Your continued use of our website will be regarded as acceptance of our practices around privacy
                        and personal information. If you have any questions about how we handle user data and personal
                        information, feel free to contact us.<br><br>

                        This policy is effective as of 31 December 2021.<br><br></p>

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
