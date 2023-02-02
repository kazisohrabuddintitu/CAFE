<?php
			require('admin/db.php');
			
			$name= $_POST['name'];
			$mail= $_POST['email'];
			$phn=$_POST['phn'];
			$msg = $_POST['msg'];

			$query = "INSERT INTO 'contact' ('cid' ,'name' ,'mail' ,'phn','msg')VALUES ('',  '$name',  '$mail',  '$phn','$msg')";
			$result   = mysqli_query($con, $query);
			header('location:contact us.php');
?>
