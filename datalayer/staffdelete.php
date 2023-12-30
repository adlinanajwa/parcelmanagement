<?php
require('db_config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect form data
    $staffID = $_POST['staffID'];

    // Perform the staff deletion
    $sql = "DELETE FROM staff WHERE Staff_ID = ?";
    
    // Use prepared statement
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $staffID);

    // Execute the statement
    $stmt->execute();

    // Close the statement
    $stmt->close();

    // Close the database connection
    $mysqli->close();
}

// Redirect to a page after deletion (e.g., staff list page)
header("Location: viewstafftable.php");
exit();
?>
