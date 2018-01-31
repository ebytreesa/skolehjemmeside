<?php
include('dbcon.php');
$id = $_GET['id'];
$query = "DELETE FROM students WHERE id=$id";
$con->query($query);
header("Location: admin.php");
?>