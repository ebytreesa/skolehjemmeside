<?php
if (isset($_POST['submit']))
{
	include('dbcon.php');
	$id = $_POST['id'];
	$grade = $_POST['grade'];
	$description = $_POST['description'];
	$relate = $_POST['relate'];
	$query = "UPDATE grade SET grade='$grade', description='$description', relate='$relate' WHERE id = $id";;
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
</head>
<body>
	<?php
		include('dbcon.php');
		$id = $_GET['id'];
		$result = $con->query("SELECT * FROM grade WHERE id=" . $_GET['id']);
		$data = $result->fetch_object();
	?>
	<div class="container">
		<?php include('nav.php'); ?>
		<h1>Karakterer&nbsp;<small>Ny karakter</small></h1>
		<form method="POST">
			<label>Karakter</label>
			<input type="Number" class="form-control" name="grade" value="<?php echo $data->grade; ?>" required>
			<br>
			<label>Beskrivelse</label>
			<input type="text" class="form-control" name="description" value="<?php echo $data->description; ?>" required>
			<br>
			<label>Relation</label>
			<input type="text" class="form-control" name="relate" value="<?php echo $data->relate; ?>" required>
			<br>
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<a href="grades.php" class="btn btn-danger">Fortryd</a>
			<input type="submit" name="submit" class="btn btn-primary" value="Rediger">
		</form>
	</div>
</body>
</html>