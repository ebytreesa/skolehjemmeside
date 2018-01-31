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
		<h1>Karakterer</h1>
		<?php
		include('dbcon.php');
		echo "<table class='table'><tr><th>#</th><th>Karakter</th><th>Beskrivelse</th><th>Relation</th><th>Rediger</th><th>Slet</th></tr>";
		$query = "SELECT * FROM grade ORDER BY id ASC";
		$result = $con->query($query);
		if ($result->num_rows > 0)
		{
			while ($row = $result->fetch_object())
			{
				echo "<tr><td>" . $row->id . "</td>" . 
				"<td>" . $row->grade . "</td>" . 
				"<td>" . $row->description . "</td>" . 
				"<td>" . $row->relate . "</td>" . 
				"<td><a href='editGrade.php?id=". $row->id ."'><span class='glyphicon glyphicon-pencil'></span></a></td>" .
				"<td><a href='deleteGrade.php?id=". $row->id ."' style='color: red;' onclick='return sure();'><span class='glyphicon glyphicon-remove'></span></a></td>" .
				"</tr>";
			}
		}
		echo "</table>";
		?>
		<a href="newGrade.php" class="btn btn-primary pull-right">Ny karakter</a>
	</div>
</body>
</html>