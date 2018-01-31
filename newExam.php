<?php
if (isset($_POST['submit']))
{
	include('dbcon.php');
	$name = $_POST['name'];
	$date = $_POST['date'];
	$time = $_POST['time'];
	$query = "INSERT INTO exams (name, `date`, `time`) VALUES ('$name', '$date', '$time')";
	if ($con->query($query) === TRUE) 
	{
    	header('Location: exams.php');
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
	<script>
		function sure()
		{
			return confirm('Er du sikker?');
		}
	</script>
</head>
<body>
	<div class="container">
		<?php include('nav.php'); ?>
		<h1>Eksamener&nbsp;<small>Ny eksamen</small></h1>
		<form method="POST">
			<label>Navn</label>
			<input type="text" class="form-control" name="name" required>
			<br>
			<label>Dato</label>
			<input type="date" class="form-control" name="date" required>
			<br>
			<label>Tidspunkt</label>
			<input type="time" class="form-control" name="time" required>
			<br>
			<a href="exams.php" class="btn btn-danger">Fortryd</a>
			<input type="submit" name="submit" class="btn btn-primary" value="Opret">
		</form>
	</div>
</body>
</html>