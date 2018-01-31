<?php
include('dbcon.php');
$id = $_GET['id'];
$query = "DELETE FROM exams WHERE id=$id";
$con->query($query);
header("Location: exams.php");
?>