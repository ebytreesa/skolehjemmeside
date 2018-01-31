<?php
if (isset($_POST['submit']))
{
	include('dbcon.php');
	$grade = $_POST['grade'];
	$description = $_POST['description'];
	$relate = $_POST['relate'];
	$query = "INSERT INTO grade (grade, description, relate) VALUES ('$grade', '$description', '$relate')";
	if ($con->query($query) === TRUE) 
	{
    	header('Location: grades.php');
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
		<h1>Karakterer&nbsp;<small>Ny karakter</small></h1>
		<form method="POST">
			<label>Karakter</label>
			<input type="Number" class="form-control" name="grade" required>
			<br>
			<label>Beskrivelse</label>
			<input type="text" class="form-control" name="description" required>
			<br>
			<label>Relation</label>
			<input type="text" class="form-control" name="relate" required>
			<br>
			<a href="grades.php" class="btn btn-danger">Fortryd</a>
			<input type="submit" name="submit" class="btn btn-primary" value="Opret">
		</form>
	</div>
</body>
</html>