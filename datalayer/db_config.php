
<?php 

$mysqli = new mysqli("localhost","root","","parcel");

if ($mysqli -> connect_error) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "parcel";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
