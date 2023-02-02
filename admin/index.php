
<html>
<head>
<title></title>
                         <link rel="stylesheet" type="text/css" href="css/login.css"/>
</head>


<body>

<form action="index.php" method="post">
<div class="login1" >
    <div class="image">
        <img src="images/2.PNG" style="height:460px;width:460px; margin-top:-90px"/>
    </div>


<div class="table">
<?php
if(isset($_POST['s']))
{
$x=$_POST['username'];
$y=$_POST['password'];
mysql_connect("localhost","root","");
mysql_select_db("coffeecafe");
$a=mysql_query("select * from user where user='$x' and pwd='$y'" );
$b=mysql_num_rows($a);

if( $b>0)
{
$_SESSION['user']=$x;
header('location:welcome.php');
}
else
{
echo "<p style='color:white;'>wrong user</p>";
}
}
?>
<center><p style="font-size:25px; color:#FFFFFF;">LOGIN FORM</p></center>
<span style="color:#FFFFFF;font-size:20px;margin-left:30px">User Name </span><input type="text" placeholder="Name"  required class="a" name="username"/><br/>
<br/>
<span style="color:#FFFFFF;font-size:20px;margin-left:30px;">Password </span><input  type="Password" placeholder="Password " required class="a" name="password"/><br/><br/>
 <input class="b" type="submit" name="s" value ="Sign up" /><a href="new.php">Regisered here</a></div>



</div>
</div>
</form>

</body>`
</html>