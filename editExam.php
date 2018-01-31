<?php
if (isset($_POST['submit']))
{
	include('dbcon.php');
	$id = $_POST['id'];
	$name = $_POST['name'];
	$date = $_POST['date'];
	$time = $_POST['time'];
	$query = "UPDATE exams SET name='$name', `date`='$date', `time`='$time' WHERE id=$id";
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
		<?php 
		include('nav.php'); 
		include('dbcon.php');
		$result = $con->query('SELECT * FROM exams WHERE id=' . $_GET['id']);
		$data = $result->fetch_object();
		?>
		<h1>Eksamener&nbsp;<small>Ny eksamen</small></h1>
		<form method="POST">
			<label>Navn</label>
			<input type="text" class="form-control" name="name" value="<?php echo $data->name; ?>" required>
			<br>
			<label>Dato</label>
			<input type="date" class="form-control" name="date" value="<?php echo $data->date; ?>" required>
			<br>
			<label>Tidspunkt</label>
			<input type="time" class="form-control" name="time" value="<?php echo $data->time; ?>" required>
			<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">;
			<br>
			<a href="exams.php" class="btn btn-danger">Fortryd</a>
			<input type="submit" name="submit" class="btn btn-primary" value="Rediger">
		</form>
	</div>
</body>
</html>