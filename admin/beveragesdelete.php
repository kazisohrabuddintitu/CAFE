<?php

$host = "localhost";
$user = "root";
$pass="";
$db = "club_coffee";
$con = mysqli_connect($host,$user,$pass,$db);

if(!$con){
	die("Could not connect" . mysqli_connect_error());
}

$id = $_GET['preeti'];
$check = mysqli_query($con, "DELETE FROM `beverages` where `b_id`='$id' ");


header('location:fetchbeverages.php');

?>

