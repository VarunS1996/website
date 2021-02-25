<?php
    include 'partials/_dbconnect.php';

    $id = $_GET['Sno'];
    echo $id;

    $deletequery = "DELETE FROM `register` WHERE `Sno.` = $id";
    mysqli_query($connection, $deletequery);

    header('location:useraccount.php');



?>