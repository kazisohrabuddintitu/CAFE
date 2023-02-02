<html>
				<head>
								<title></title>
								<link rel="stylesheet" type="text/css" href="css/menu.css"/>
								<link rel="stylesheet" type="text/css" href="css/menu1.css"/>
								<link rel="stylesheet" type="text/css" href="css/big eats.css"/>
								<link rel="stylesheet" type="text/css" href="css/sundaes.css"/>
								<link rel="stylesheet" type="text/css" href="css/cake away.css"/>
								<link rel="stylesheet" type="text/css" href="css/dessert.css"/>
								<link rel="stylesheet" type="text/css" href="css/small eats.css"/>
				</head>
				
  <body>
				<?php
				include ('menu.php');
				?>
				
<div class="maindiv">
	<div class="leftdiv">
				
				<center><a style="text-decoration:none;color:#000000;" href="small eats.php"><p  class="leftdiv1">Small eats</p></a></center>
				<center><a style="text-decoration:none;color:#000000;" href="big eats.php"><p  class="leftdiv1">Big eats/Sandwiches</p></a></center>
				<center><a  style="text-decoration:none;color:#000000;"href="sundaes.php"><p  class="leftdiv1">Sundaes</p></a></center>
				<center><a  style="text-decoration:none;color:#000000;"href="cake away.php" ><p  class="leftdiv1">Cake away</p></a></center>
				<center><a  style="text-decoration:none;color:#000000;"href="dessert.php"><p  class="leftdiv1">Dessert shots</p></a></center>								
    </div>
	<div class="rightdiv">
	<?php
	mysql_connect("localhost","root","");
mysql_select_db("coffeecafe");
$x=mysql_query("select * from food where menu_type='2'");
while($y=mysql_fetch_array($x))
{
?>
				<div class="rightdiv1">
					<div class="rightdiv1a"><img src="<?php echo 'img/'.$y[3]; ?>" style="height:279px; width:279px; "></div>
					<div class="rightdiv1b"><center><p><?php echo $y[2]; ?>(&nbsp;<img src="IMAGES/download.png" style="height:11px; width:13px;"><?php echo $y[4]; ?>)</p></center></div>
				</div>
				
<?php
}
?>				
				
				
							
</body>
</html>			