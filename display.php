<?php
        require('connection.php');
        $sql = "select * from games";

        $result = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result) > 0) {
        	while ($row = mysqli_fetch_assoc($result)) {
        		extract($row);
        			echo "<center><img src = '".$row['img']."'style='width:70%'></center>";
			    	echo $name . " <br>"
			    	. $price . " <br>"
			    	. $description . " <br>";
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