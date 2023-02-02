<html>

<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/menu.css" />
	<link rel="stylesheet" type="text/css" href="css/menu1.css" />
	<link rel="stylesheet" type="text/css" href="css/big eats.css" />
	<link rel="stylesheet" type="text/css" href="css/sundaes.css" />
	<link rel="stylesheet" type="text/css" href="css/cake away.css" />
	<link rel="stylesheet" type="text/css" href="css/dessert.css" />
	<link rel="stylesheet" type="text/css" href="css/small eats.css" />
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
	<?php
		include('menu.php');
		
		$host = "localhost";
$user = "root";
$pass="";
$db = "club_coffee";
$con = mysqli_connect($host,$user,$pass,$db);

if(!$con){
	die("Could not connect" . mysqli_error());
}

mysqli_select_db($con,$db);
$sql = 'select * from  beverages';
$x= mysqli_query($con,$sql);

if(!$x){
	die("Could not get data" . mysqli_error());
}
?>

	<div class="main d-flex">

		<div class="justify-content-center">
		<?php
			while ($y= mysqli_fetch_array($x))
			{
		?>
		<div class="rightdiv1 ">
			<div class="rightdiv1a"><img src="img/<?php echo $y[3];?>" style="height:279px; width:279px; "></div>
			<div class="rightdiv1b">
				<center>
					<p>
						<?php echo $y[1]; ?>&nbsp;(<?php echo $y[4]; ?> Taka)
					</p>
				</center>
			</div>
		</div>

		<?php
			}
		?>

		</div>
	</div>

	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>