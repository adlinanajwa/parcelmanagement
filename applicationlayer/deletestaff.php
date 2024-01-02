<?php
// Include the database configuration file
require('../datalayer/db_config.php');

// Fetch available staff IDs from the database
$sql = "SELECT Staff_ID FROM staff";
$result = $mysqli->query($sql);

// Store the staff IDs in an array
$staffIDs = array();
while ($row = $result->fetch_assoc()) {
    $staffIDs[] = $row['Staff_ID'];
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['deleteStaff'])) {
        $selectedStaffID = $_POST['staffID'];

        // Perform the delete operation here (use prepared statements to prevent SQL injection)
        $deleteSql = "DELETE FROM staff WHERE Staff_ID = ?";
        $deleteStmt = $mysqli->prepare($deleteSql);
        $deleteStmt->bind_param("i", $selectedStaffID);

        if ($deleteStmt->execute()) {
            echo "Staff with ID $selectedStaffID deleted successfully.";
        } else {
            echo "Error: " . $deleteStmt->error;
        }

        $deleteStmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Staff</title>
</head>
<body>
    <h2>Delete Staff</h2>
    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="staffID">Select Staff ID to Delete:</label>
        <select name="staffID" required>
            <?php foreach ($staffIDs as $id): ?>
                <option value="<?php echo $id; ?>"><?php echo $id; ?></option>
            <?php endforeach; ?>
        </select>

        <button type="submit" name="deleteStaff">Delete</button>
    </form>
</body>
</html>
