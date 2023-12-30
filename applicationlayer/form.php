<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Staff Details</title>
</head>
<body>
    <h2>Update Staff Details</h2>
    <form action="http://localhost/workshop2/datalayer/staffupdate.php" method="post">
       
            <label for="Staff_ID">Staff ID:</label>
            <input type="text" name="Staff_ID" required>
        
            <label for="Staff_Name">New Name:</label>
            <input type="text" name="Staff_Name" required>
        
            <label for="Staff_ContactNo">New Contact Number:</label>
            <input type="text" name="Staff_ContactNo" required>
        
            <label for="Staff_Email">New Email:</label>
            <input type="email" name="Staff_Email" required>
        
            <label for="Staff_Address">New Address:</label>
            <input type="text" name="Staff_Address" required>
        
            <label for="Staff_Password">New Password:</label>
            <input type="password" name="Staff_Password" required>
        
           
        <button type="submit">Update</button>
    </form>
</body>
</html>
