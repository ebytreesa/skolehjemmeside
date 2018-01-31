<?php

$con = new mysqli('localhost', '', '', 'test');

if ($con->connect_error) {
    die("Forbindelsen fejlede: " . $con->connect_error);
} 
?>