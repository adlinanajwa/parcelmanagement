<?php
include 'db_config.php';

// Fetch data from the database
$sql = "SELECT staff_id, staff_name FROM staff";
$result = $mysqli->query($sql);

$staffList = array();

if (!$result) {
    die("Error: " . $mysqli->error);
}

while ($row = $result->fetch_assoc()) {
    $staffList[] = $row;
}

// Close the database connection
$mysqli->close();
?>

<!-- Display the staff list as an HTML table -->
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <!-- Add more columns as needed -->
    </tr>
    <?php foreach ($staffList as $staff): ?>
        <tr>
            <td><?php echo $staff['staff_id']; ?></td>
            <td><?php echo $staff['staff_name']; ?></td>
            <!-- Add more cells as needed -->
        </tr>
    <?php endforeach; ?>
</table>
