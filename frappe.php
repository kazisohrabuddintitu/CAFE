<html>
				<head>
								<title></title>
								<link rel="stylesheet" type="text/css" href="css/menu.css"/>
								
								<link rel="stylesheet" type="text/css" href="css/frappe.css"/>
								
								<link rel="stylesheet" type="text/css" href="css/hot coffee.css"/>
								<link rel="stylesheet" type="text/css" href="css/cold coffee.css"/>
							
								
								<link rel="stylesheet" type="text/css" href="css/frosteals.css"/>
								
				</head>
				
  <body>
				<?php
				include ('menu.php');
				?>
				
<div class="maindiv">
	<div class="leftdiv">
				
			<center><a style="text-decoration:none;color:#000000;" href="hot coffee.php"><p  class="leftdiv1">Hot Coffee</p></a></center>
				<center><a style="text-decoration:none;color:#000000;" href="cold coffee.php"><p  class="leftdiv1">Cold Coffee</p></a></center>
				
					<center><a style="text-decoration:none;color:#000000;" href="frappe.php"><p  class="leftdiv1">Frappe</p></a></center>
				<center><a style="text-decoration:none;color:#000000;" href="frosteals.php"><p  class="leftdiv1">frosteals</p></a></center>
    </div>
	
	
		<div class="rightdiv">
	<?php
	mysql_connect("localhost","root","");
mysql_select_db("coffeecafe");
$x=mysql_query("select * from beverages where menu_type='3'");
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
		
				
				
				
				
				
				
				
	</div>
</div>
				
							
</body>
</html>			>
