<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Club Coffee</title>
	<link rel="stylesheet" type="text/css" href="css/menu.css" />
	<link rel="stylesheet" type="text/css" href="css/contact us.css" />
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
	<?php
	include('menu.php');
	?>


	<div class="container mt-4">

		<div class="row d-flex mt-4">


			<div class="col-md-6">

				<div>
					<img alt="" class="img-fluid  " src="https://i.pinimg.com/originals/67/66/49/676649b3f9e491a18bfdb636ffb302d7.png" />
				</div>
			</div>
			<div class="col-md-5 mt-4 rounded pill">
				<form action="updateContact.php" method="post">
					<div class="form-row">
						<div class="col mt-2">
							<label for="name">Name</label>
							<input type="text" name="name" id="name" class="form-control" placeholder="Enter name">
						</div>
						<div class="col mt-2">
							<label for="email">Email</label>
							<input type="email" name="email" id="email" class="form-control" placeholder="Enter email">
						</div>
						<div class="col mt-2">
							<label for="phn">Phone</label>
							<input type="text" name = "phn" id = "phn" class="form-control" placeholder="Enter phone number">
						</div>
						<div class="col mt-2">
							<label for="msg">Message</label>
							<input type="text" name ="msg" id ="msg" class="form-control" placeholder="Enter your message">
						</div>
						<div class="d-grid gap-2 col-6 mx-auto mt-3">
							<input class="btn btn-primary" type="submit" value="Submit"  />
							<!-- <button class="btn btn-primary" type="button">Submit</button> -->
						</div>
					</div>
				</form>
			</div>


		</div>


	</div>




	<div class="bottom">
		<center>
			<p style="padding:30px;">Club Coffee</p>
		</center>
	</div>

	</div>

	</div>
</body>

</html>