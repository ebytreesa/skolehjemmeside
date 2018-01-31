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
		<h1>Elever</h1>
		<?php
		include('dbcon.php');
		echo "<table class='table'><tr><th>Fornavn</th><th>Efternavn</th><th>Eksamen</th><th>Dato</th><th>Tidspunkt</th><th>Karakter</th></tr>";
		$query = "
		SELECT 
		students.firstname, 
		students.lastname, 
		exams.date, 
		exams.time, 
		exams.name, 
		grade.grade
		FROM results
		INNER JOIN students
		ON students.id = results.studentId
		INNER JOIN exams
		ON exams.id = results.examId
		INNER JOIN grade
		ON grade.id = results.gradeId
		WHERE results.studentId = " . $_GET['id'];
		$result = $con->query($query);
		$count = 0;
		$grade = 0;
		if ($result->num_rows > 0)
		{
			while ($row = $result->fetch_object())
			{
				$count++;
				echo "<tr><td>" . $row->firstname . "</td>" . 
				"<td>" . $row->lastname . "</td>" . 
				"<td>" . $row->name . "</td>" . 
				"<td>" . $row->date . "</td>" . 
				"<td>" . $row->time . "</td>" . 
	   			"<td>" . $row->grade . "</td></tr>";
				$grade = $grade + $row->grade;
			}
		}
		echo "</table>";
		if ($count > 0)
		{
			echo "<h1>Gennemsnit: " . round($grade / $count, 2) . "</h1>";
		} else
		{
			echo "<h1>Gennemsnit: Ingen resultater";
		}
		?>
		<a href="newStudent.php" class="btn btn-primary pull-right">Ny elev</a>
	</div>
</body>
</html>