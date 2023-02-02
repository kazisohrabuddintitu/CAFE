<?php
require('db.php');
include("auth_session.php");
$a=$_POST['menutype'];
$b=$_POST['product'];
$d=$_FILES['image']['tmp_name'];
$e='../img/'.$_FILES['image']['name'];
$g=$_FILES['image']['name'];
$f=$_POST['price'];

move_uploaded_file($d,$e);

$query = "INSERT INTO `combo` (`c_id` ,`menu_type` ,`product` ,`image`,`price`)VALUES ('',  '$a',  '$b',  '$g','$f')";
$result   = mysqli_query($con, $query);
header('location:combo offers.php');
?>
