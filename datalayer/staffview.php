
<?php
require ('db_config.php');

// Fetch data from the database
$sql = "SELECT Staff_ID, Staff_Name,Staff_contactNo,Staff_Email,Staff_Address,Staff_Password FROM staff";
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
      
    </tr>
    <?php foreach ($staffList as $staff): ?>
        <tr>
            <td><?php echo $staff['Staff_ID']; ?></td>
            <td><?php echo $staff['Staff_Name']; ?></td>
            <td><?php echo $staff['Staff_contactNo']; ?></td>
            <td><?php echo $staff['Staff_Email']; ?></td>
            <td><?php echo $staff['Staff_Address']; ?></td>
            <td><?php echo $staff['Staff_Password']; ?></td>
            <!-- Add more cells as needed -->
        </tr>
    <?php endforeach; ?>
</table>


