<html>

<?php
	require('db.php');
	include("auth_session.php");
?>

<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/welcome.css" />
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>


<body>

	<div class="maindiv">
		<center><img src="images/panda_welcome__icon_by_mrsebuhi-d7c1kx0.png" style="height:200px; width:200px;" /></center>
		<div class="leftdiv">

			<center><a style="text-decoration:none;color:#000000;" href="food.php">
					<p class="leftdiv1"> Add Food</p>
				</a></center>
			<center><a style="text-decoration:none;color:#000000;" href="beverages.php">
					<p class="leftdiv1">Add Beverages</p>
				</a></center>
			<center><a style="text-decoration:none;color:#000000;" href="combo offers.php">
					<p class="leftdiv1">Add Combo Offers</p>
				</a></center>
			<center><a style="text-decoration:none;color:#000000;" href="login.php">
					<p class="leftdiv1">Logout</p>
				</a></center>

		</div>


	</div>





	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>