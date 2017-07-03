<?php

require 'connection.php';

if (isset($_POST['register'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$confirm_password = $_POST['confirm_password'];

	if ($password == $confirm_password) {
		$password = sha1($password); // encrypt password
		
		$sql = "INSERT INTO users(username,password,role)
		VALUES ('$username','$password','regular')";
		mysqli_query($conn,$sql);

		echo "Registered Successfully"; 

	} else {
		echo "Password did not match";
	}

}



?>

<!DOCTYPE html>
<html>
	<head>
		<title>Register</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Custom Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

		<!-- CSS -->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<!-- <link href="css/main.css" rel="stylesheet" type="text/css"> -->

	</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1>Register</h1>
				<form method="post" action="">
					<div class="form-group">
						<input type="text" name="username" placeholder="Username">
					</div>
					<div class="form-group">
						<input type="password" name="password" placeholder="Password">
					</div>
					<div class="form-group">
						<input type="password" name="confirm_password" placeholder="Confirm Password">
					</div>
					<div class="form-group">
						<input class="btn btn-success" type="submit" name="register" value="register">
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- JAVASCRIPTS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>