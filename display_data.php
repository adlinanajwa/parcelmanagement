<?php
// PHP code to connect to MySQL database

$servername = "localhost"; // Change this to your MySQL server name
$username = "root"; // Change this to your MySQL username
$password = ""; // Change this to your MySQL password
$database = "parcel"; // Change this to your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}