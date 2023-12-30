<?php
require('db_config.php');

if (isset($_GET['id'])) {
    $staffID = $_GET['id'];

    // Delete staff details from the database
    $sql = "DELETE FROM staff WHERE Staff_ID = $staffID";

    $result = $mysqli->query($sql);

    if (!$result) {
        die("Error: " . $mysqli->error);
    }

    // Close the database connection
    $mysqli->close();

    // Redirect back to the staff table view after deletion
    header('Location: viewstafftable.php');
    exit();
} else {
    // Handle the case when staff ID is not provided
    echo "Invalid request!";
}
?>
