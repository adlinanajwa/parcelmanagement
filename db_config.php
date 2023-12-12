<?php
$errors = array(); 
$mysqli = new mysqli("localhost", "root", "", "parcel");

if ($mysqli->connect_error) { 
    die("Connection failed: " . $mysqli->connect_error); 
}
?>
