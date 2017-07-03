<?php
	session_start();
      if (isset($_POST['login'])) {
        require('connection.php');
        $username = $_POST['username'];
        $password = sha1($_POST['password']);
        $sql = "select * from users where username = '$username' and password = '$password'";

        $result = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result) > 0) {
        	while ($row = mysqli_fetch_assoc($result)) {
        		extract($row);
			    	$_SESSION['message'] = "Login Succesful";
			    	$_SESSION['username'] = $username;
			    	$_SESSION['role'] = $role;
			    	echo "login Succesful <br>";
			    	echo $username;
			}
        }
      }
    ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center><form action="" method="POST" id="login">
	    Username:<br>
	      <input type="text" name="username"><br>
	    Password:<br>
	      <input type="password" name="password"><br>
	      <input type="submit" value="Login" class="button" name="login"> 
	</form></center>

</body>
</html>

