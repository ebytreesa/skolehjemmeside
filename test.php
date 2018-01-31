<?php
include('dbcon.php');
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
WHERE results.studentId = 1";
$result = $con->query($query);
if ($result->num_rows > 0)
{
	while ($row = $result->fetch_assoc())
	{
		echo $row['grade'];
	}
}

?>