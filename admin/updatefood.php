<?php

$host = "localhost";
$user = "root";
$pass="";
$db = "club_coffee";
$con = mysqli_connect($host,$user,$pass,$db);

if(!$con){
	die("Could not connect" . mysqli_connect_error());
}

$id=$_POST['id'];
$name=$_POST['name'];
$price=$_POST['price'];
$check = mysqli_query($con, "UPDATE `food` SET  `product` = '$name',`price` = '$price' where `f_id`='$id' ");

if($check){
    echo 'Record updated successfully';
    header('location:fetchfood.php');
}
else{
    echo 'Error updating record:'.mysqli_error($con);
    header('location:foodedit.php');
}

?>


