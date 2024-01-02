
<?php 

$mysqli = new mysqli("localhost","root","","workshop");

if ($mysqli -> connect_error) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "workshop";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

