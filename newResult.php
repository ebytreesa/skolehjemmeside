<?php
if (isset($_POST['submit']))
{
	include('dbcon.php');
	$student = $_POST['student'];
	$exam = $_POST['exam'];
	$grade = $_POST['grade'];
	if ($con->query("INSERT INTO results (studentId, examId, gradeId) VALUES ('$student', '$exam', '$grade')") === TRUE)
	{
		header('Location: admin.php');
	} else
	{
		echo $con->error;
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
		?>
		<h1>Nyt resultat</h1>
		<form method="POST">
		<label>Vælg elev</label>
		<select name="student" class="form-control">
		<?php
			$result = $con->query("SELECT * FROM students ORDER BY firstname");
			if ($result->num_rows > 0)
			{
				while ($row = $result->fetch_object())
				{
					echo "<option value='". $row->id ."'>" . $row->firstname . " " . $row->lastname . "</option>";
				}
			}
		?>			
		</select>
		<br>
		<label>Vælg eksamen</label>
		<select name="exam" class="form-control">
		<?php
			$result = $con->query("SELECT * FROM exams ORDER BY name");
			if ($result->num_rows > 0)
			{
				while ($row = $result->fetch_object())
				{
					echo "<option value='". $row->id ."'>" . $row->name . "</option>";
				}
			}
		?>			
		</select>
		<br>
		<label>Karakter</label>
		<select name="grade" class="form-control">
		<?php
			$result = $con->query("SELECT * FROM grade ORDER BY grade");
			if ($result->num_rows > 0)
			{
				while ($row = $result->fetch_object())
				{
					echo "<option value='". $row->id ."'>" . $row->grade . " " . $row->description . "</option>";
				}
			}
		?>			
		</select>
		<br>
		<input type="submit" name="submit" value="Opret" class="btn btn-primary">
		</form>

	</div>
</body>
</html>