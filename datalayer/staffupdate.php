<?php
require('db_config.php');

// Fetch the staff details based on the staff ID from the URL parameter
if (isset($_GET['id'])) {
    $staffID = $_GET['id'];
    
    // Fetch the ezxisting staff details from the database
    $sql = "SELECT Staff_ID, Staff_Name, Staff_contactNo, Staff_Email, Staff_Address, Staff_Password
            FROM staff WHERE Staff_ID = $Staff_ID";

    $result = $mysqli->query($sql);

    if (!$result) {
        die("Error: " . $mysqli->error);
    }

    $staff = $result->fetch_assoc();

    // Close the database connection
    $mysqli->close();
} 

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect form data
    $staffID = $_POST['staff_id'];
    $newName = $_POST['new_name'];
    $newContactNo = $_POST['new_contact_no'];
    $newEmail = $_POST['new_email'];
    $newAddress = $_POST['new_address'];
    $newPassword = $_POST['new_password'];

    // Update staff details in the database
    $sql = "UPDATE staff SET 
            Staff_Name = '$newName',
            Staff_contactNo = '$newContactNo',
            Staff_Email = '$newEmail',
            Staff_Address = '$newAddress',
            Staff_Password = '$newPassword'
            WHERE Staff_ID = $staffID";

    if ($mysqli->query($sql)) {
        // Redirect to the staff list page after successful update
        header('Location: viewstafftable.php');
        exit(); // Important: exit after header to prevent further execution
    } else {
        die("Error: " . $mysqli->error);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... (your head content) ... -->
</head>
<body class="sb-nav-fixed">
    <!-- ... (your body content) ... -->
</body>
</html>
