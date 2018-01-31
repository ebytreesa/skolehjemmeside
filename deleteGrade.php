<?php
include('dbcon.php');
$id = $_GET['id'];
$query = "DELETE FROM grade WHERE id=$id";
$con->query($query);
header("Location: grades.php");
?>