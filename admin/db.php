<?php
    // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.
    $host = 'localhost';
    $user = "root";
    $pass="";
    $db = "club_coffee";
    $con = mysqli_connect($host,$user,$pass,$db);
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>