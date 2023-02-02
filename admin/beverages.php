<html>

<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/beverages.css" />


</head>

<body>


	<div class="maindiv">
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
			<center><a style="text-decoration:none;color:#000000;" href="logout.php">
					<p class="leftdiv1">Logout</p>
				</a></center>


		</div>
		<div class="rightdiv">

			<form action="beverages1.php" method="Post" enctype="multipart/form-data">

				<p style="margin-top:-80px;"><a style="text-decoration:none;color:#FFFFFF;" href="fetchbeverages.php">Add Beverages - Click here for edit</a></p><br /><b />
				Sub menu&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="menutype">


					<option value="0">--select-- </option>
					<option value="1">Hot coffee </option>
					<option value="2">cold coffee</option>
					<option value="3">frappe</option>
					<option value="4">frosteals</option>

				</select><br /><br />

				Product &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="product" /><br /><br />




				Image&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" value="file" name="image" /><br /><br />

				Price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="price"><br /><br />


				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="submit" />

			</form>
		</div>

	</div>

</body>

</html>