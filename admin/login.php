<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" type="text/css" href="css/login.css"/>
</head>
<body>
<?php
    $falg = false;
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        
        $query    = "SELECT * FROM users WHERE username='$username'
                     AND password = '$password'";
        
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        
        if ($rows == 1) {
            
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: welcome.php");
        } else {
            
        echo'    <form method="post" name="login">
            
        <div class="login1">   
            <div class= "image">
                <img src="images/2.PNG" style="height:460px;width:460px; margin-top:-90px"/>
            </div>
            <div class="al">
                <br><br><br><br>
                &nbsp &nbsp &nbsp &nbsp User id and password combination is not valid. Please try again.
            </div>
            <div class="table">
                <center><p style="font-size:25px; color:#FFFFFF;">LOGIN FORM</p></center>
                <span style="color:#FFFFFF;font-size:20px;margin-left:30px">User ID &nbsp &nbsp </span>
                <input type="text"  required class="a" name="username" placeholder="User ID" autofocus="true"/>
                <br/>
                <span style="color:#FFFFFF;font-size:20px;margin-left:30px;">Password  &nbsp </span>
                <input type="password" required class="a" name="password" placeholder="Password"/>
                <br/>
                <input type="submit" value="Login" name="submit" class="b"/>
                <p class="link"><a href="new.php">New Registration</a></p>
                
            </div>
            
        </div>
        
    </form>';
        }
    }else{
?>
<form method="post" name="login">
        
        <div class="login1">   
            <div class= "image">
                <img src="images/2.PNG" style="height:460px;width:460px; margin-top:-90px"/>
            </div>
            
            <div class="table1">
                <center><p style="font-size:25px; color:#FFFFFF;">LOGIN FORM</p></center>
                <span style="color:#FFFFFF;font-size:20px;margin-left:30px">User ID &nbsp &nbsp </span>
                <input type="text"  required class="a" name="username" placeholder="User ID" autofocus="true"/>
                <br/>
                <span style="color:#FFFFFF;font-size:20px;margin-left:30px;">Password  &nbsp </span>
                <input type="password" required class="a" name="password" placeholder="Password"/>
                <br/>
                <input type="submit" value="Login" name="submit" class="b"/>
                <p class="link"><a href="new.php">New Registration</a></p>
            </div>
            <a href="../index.php" className="clickme danger">Home Page</a>
        </div>
</form>
<?php } ?>

</body>
</html>