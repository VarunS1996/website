<?php

$servername ="localhost";
$username ="root";
$password ="";
$database ="varun";

$connection = mysqli_connect($servername, $username, $password, $database);
    if(!$connection)
    {
        die("Error..!");
    }


?>