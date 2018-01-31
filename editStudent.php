<?php
if (isset($_POST['submit']))
{
	$id = $_POST['id'];
	include('dbcon.php');
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$city = $_POST['city'];
	$query = "UPDATE students SET firstname='$firstname', lastname='$lastname', city='$city' WHERE id=" . $id;
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
	<?php
		include('dbcon.php');
		$id = $_GET['id'];
		$result = $con->query("SELECT * FROM students WHERE id=" . $id);
		$data = $result->fetch_object();
	?>
	<div class="container">
		<?php include('nav.php'); ?>
		<h1>Elever&nbsp;<small>Rediger elev</small></h1>
		<form method="POST">
			<label>Fornavn</label>
			<input type="text" class="form-control" name="firstname" value="<?php echo $data->firstname; ?>" required>
			<br>
			<label>Efternavn</label>
			<input type="text" class="form-control" name="lastname" value="<?php echo $data->lastname; ?>"  required>
			<br>
			<label>By</label>
			<input type="text" class="form-control" name="city" value="<?php echo $data->city; ?>"  required>
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<br>
			<a href="admin.php" class="btn btn-danger">Fortryd</a>
			<input type="submit" name="submit" class="btn btn-primary" value="Rediger">
		</form>
	</div>
</body>
</html>