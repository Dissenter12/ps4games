<?php

require 'connection.php';

if (isset($_POST['gameregister'])) {
	$title = $_POST['game_name'];
	$price = $_POST['game_price'];
	$description = addslashes($_POST['game_desc']);
	$image = $_POST['game_img'];
	$category = $_POST['category'];


	$sql = "INSERT INTO games(name,price,description,img,category)
		VALUES ('$title','$price','$description','$image','$category')";
		mysqli_query($conn,$sql);

		echo "Registered Successfully"; 

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
						<input type="text" name="game_name" placeholder="Title of the game">
					</div>
					<div class="form-group">
						<input type="text" name="game_price" placeholder="Price">
					</div>
					<div class="form-group">
						<textarea name="game_desc" rows="5" cols="60" placeholder="Description"></textarea>
					</div>
					<div class="form-group">
						Game Image: 
						<input type="file" name="game_img">
					</div>
					<div class="form-group">
						Category: <br>
						<input type="radio" name="category" value="rpg" checked> Role Playing Game<br>
						<input type="radio" name="category" value="action"> Action<br>
						<input type="radio" name="category" value="strategy"> Strategy<br>
						<input type="radio" name="category" value="fitness"> Fitness<br> 
						<!-- mysql_real_escape_string -->
					</div>
					<div class="form-group">
						<input class="btn btn-success" type="submit" name="gameregister" value="Add">
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