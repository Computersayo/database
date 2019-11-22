
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>slider</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>
<body class="container">

	<?php
	$conn=mysqli_connect("localhost","root","","ogata");

	if(isset($_POST['save'])){

		
		$sql="INSERT INTO users(firstname,password,email) VALUES('".$_POST["firstname"]."','".$_POST["password"]."','".$_POST["email"]."')";
		if(!mysqli_query($conn,$sql)){
			die("data failure");
			
		}
		else{
			echo "data inserted";
		}
		
	
	}
	mysqli_close($conn);
	?>
	<form action="index.php" method="post">
		<label id="first">FIRSTNAME:</label><br>
		<input type="text" name="firstname"><br>
		<label id="first">PASSWORD:</label><br>
		<input type="password" name="password"><br>
		<label id="first">EMAIL:</label><br>
		<input type="text" name="email"><br>
		<button type="submit" name="save">save</button>
	</form>
	

</body>
</html>