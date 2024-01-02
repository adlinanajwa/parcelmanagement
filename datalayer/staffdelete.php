<?php
require('db_config.php');

if (isset($_GET['id'])) {
    $staffIDToDelete = $_GET['id'];

    // Perform the delete operation here (use prepared statements to prevent SQL injection)
    $sql = "DELETE FROM staff WHERE Staff_ID = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("i", $staffIDToDelete);

    if ($stmt->execute()) {
        echo "Staff deleted successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $mysqli->close();
} else {
    echo "Invalid request.";
}
?>
