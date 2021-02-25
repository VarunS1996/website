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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
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
            <div class="container-fluid">
                <table class="table" id="pagination">
                    <thead><h1>User's Queries/Concerns..!</h1><br>
                        <tr>
                            <th scope="col">S.no</th>
                            <th scope="col">NAME</th>
                            <th scope="col">EMAIL ADDRESS</th>
                            <th scope="col">MOBILE NUMBER</th>
                            <th scope="col">QUERY</th>
                            <th scope="col">DATE OF QUERY</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        require ('partials/_dbconnect.php');

                       $sql1 = "SELECT * FROM `contactus`"; 
                        $query2 = mysqli_query($connection , $sql1);

                        while($row = mysqli_fetch_assoc($query2))
                        {
                    ?>    
                            <tr>
                                <th scope='row'><?php echo $row['Sno.']; ?></th>
                                <td><?php echo $row['Name']; ?></td>
                                <td><span style='background-color:lightgrey;padding:5px;'><?php echo $row['Email']; ?></span></td>
                                <td><?php echo $row['Number']; ?></td>
                                <td><?php echo $row['Description']; ?></td>
                                <td><?php echo $row['log']; ?></td>
                                <!-- <td><a href="DeleteQuery.php?QueryDataDelete?where id=<?php echo $row['Sno.'];?>"><i class='fas fa-trash' title='Delete Query' style='cursor:pointer;color:red;'></a></i></td> -->
                            </tr>
                            
                    <?php    
                        }
                    ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>



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
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    
    <script>
    $(document).ready(function() {
        $('#sidebarCollapse').on('click', function() {
            $('#sidebar').toggleClass('active');
        });
    });
    </script>
    <script>
        $(document).ready(function() 
        {
            $('#pagination').DataTable();
        });
    </script>

</body>

</html>