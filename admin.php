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
		<h1>Elever</h1>
		<?php
		include('dbcon.php');
		echo "<table class='table'><tr><th>#</th><th>Fornavn</th><th>Efternavn</th><th>By</th><th>Rediger</th><th>Slet</th><th>Karakter</th></tr>";
		$query = "SELECT * FROM students ORDER BY id ASC";
		$result = $con->query($query);
		if ($result->num_rows > 0)
		{
			while ($row = $result->fetch_object())
			{
				echo "<tr><td>" . $row->id . "</td>" . 
				"<td>" . $row->firstname . "</td>" . 
				"<td>" . $row->lastname . "</td>" . 
				"<td>" . $row->city . "</td>" . 
				"<td><a href='editStudent.php?id=". $row->id ."'><span class='glyphicon glyphicon-pencil'></span></a></td>" .
				"<td><a href='deleteStudent.php?id=". $row->id ."' style='color: red;' onclick='return sure();'><span class='glyphicon glyphicon-remove'></span></a></td><td><a href='showStudent.php?id=". $row->id ."'><span class='glyphicon glyphicon-list-alt'></span></a></td>" .
				"</tr>";
			}
		}
		echo "</table>";
		?>
		<a href="newStudent.php" class="btn btn-primary pull-right">Ny elev</a>
	</div>
</body>
</html>