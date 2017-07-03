<?php
//procedural process on connecting to mysql
require 'connection.php';


//$sql = "SELECT firstName,lastName FROM employees"; // firstname and lastname only
$sql = "SELECT * FROM employees"; // all columns in employees

$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)){

		extract($row);
		echo $firstName . " " . $lastName . '<br>';

	}
}


?>