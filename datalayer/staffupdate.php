<?php
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $staffIDToUpdate = isset($_POST['Staff_ID']) ? $_POST['Staff_ID'] : '';

    $newName = isset($_POST['Staff_Name']) ? $_POST['Staff_Name'] : '';
    $newContactNo = isset($_POST['Staff_contactNo']) ? $_POST['Staff_contactNo'] : '';
    $newEmail = isset($_POST['Staff_Email']) ? $_POST['Staff_Email'] : '';
    
    $newPassword = isset($_POST['Staff_Password']) ? $_POST['Staff_Password'] : '';

    // Add other form fields as needed

    // Prepare and execute the SQL statement
    $sql = "UPDATE staff SET Staff_Name = ?, Staff_contactNo = ?, Staff_Email = ?,  Staff_Password = ? WHERE Staff_ID = ?";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param("ssssi", $newName, $newContactNo, $newEmail, $newPassword, $staffIDToUpdate);

    if ($stmt->execute()) {
        echo "Staff updated successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request. Please submit the form.";
}
?>
