<?php
if (isset($_POST['submit']))
{
	include('dbcon.php');
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$city = $_POST['city'];
	$query = "INSERT INTO students (firstname, lastname, city) VALUES ('$firstname', '$lastname', '$city')";
	if ($con->query($query) === TRUE) 
	{
    	header('Location: admin.php');
	} else 
	{
    	echo "Error: " . $sql . "<br>" . $con->error;
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Skole siden</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</head>
<body>
	<div class="container">
		<?php include('nav.php'); ?>
		<h1>Elever&nbsp;<small>Ny elev</small></h1>
		<form method="POST">
			<label>Fornavn</label>
			<input type="text" class="form-control" name="firstname" required>
			<br>
			<label>Efternavn</label>
			<input type="text" class="form-control" name="lastname" required>
			<br>
			<label>By</label>
			<input type="text" class="form-control" name="city" required>
			<br>
			<a href="admin.php" class="btn btn-danger">Fortryd</a>
			<input type="submit" name="submit" class="btn btn-primary" value="Opret">
		</form>
	</div>
</body>
</html>