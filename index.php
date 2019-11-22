<!DOCTYPE html>
<html>
<head>
	<title>formtest</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="container">
	<?php
	$conn=mysqli_connect("localhost","root","","nyatike");
	if(isset($_POST['submit'])){
		$first=$_POST['firstname'];
		$second=$_POST['lastname'];
		$email=$_POST['email'];
		$contact=$_POST['contact'];
		$add=$_POST['ADDRESS'];
		if($first !=''|| $email !=''){
			$sql=("insert into log(firstname,lastname,email,contact,ADDRESS) VALUES('$first','$second','$email','$contact','$add')");
			if (mysqli_query($conn,$sql)) {
				
			echo "<br/><br/><span>Data inserted successfully...!!</span>";
		}
		else{
			echo "<p>insertion failed <br/> some fields are missing<p/>";
		}
	}
}

	?>
	<div class="maindiv">
		<div class="formdiv">
			<div class="title">
				<h2>REGISTRATION FORM</h2>	
			</div>
			<form action="index.php" method="post">
				<h2>Form</h2>
				<label>FName:</label>
				<input  class="name"type="text" name="firstname">
				<label>LName:</label>
				<input  class="name"type="text" name="lastname">
				<label>EMAIL:</label>
				<input  class="name"type="text" name="email">
				<label>contact:</label>
				<input  class="name"type="text" name="contact">
				<label>ADDRESS:</label>
				<textarea cols="25" name="ADDRESS" rows="5"></textarea><br>
				<input class="submit" name="submit" type="submit" value="insert">	
				
			</form>
		</div>
	</div>
</body>
</html>