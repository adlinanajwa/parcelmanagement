<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "parcel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to retrieve staff data
$sql = "SELECT * FROM staff";
$result = $conn->query($sql);

// Fetch data and send it as JSON
$staffData = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $staffData[] = $row;
    }
}

// Close connection
$conn->close();

// Output the staff data as JSON
header('Content-Type: application/json');
echo json_encode($staffData);
?>
