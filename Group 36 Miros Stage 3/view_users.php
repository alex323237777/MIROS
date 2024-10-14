<?php
session_start();

$db = new SQLite3('MIROS.db');

$query = $db->prepare("SELECT * FROM Users"); 

$result = $query->execute();

$users = [];
while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
    $users[] = $row;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Appointments</title>
    <link rel="stylesheet" href="approvalcss.css"> 
</head>
<body>
<img src="images/miroslogo.png" alt="Miros Logo" class="logo">
    <h2 class="approve-title">View Users</h2>
    <div class="record-container">
        <?php foreach ($users as $user): ?>
            <div class="record-box">
                <p><strong>User ID:</strong> <?php echo $user['user_id']; ?></p>
                <p><strong>Firstname:</strong> <?php echo $user['user_Fname']; ?></p>
                <p><strong>Surname:</strong> <?php echo $user['user_Lname']; ?></p>
                <p><strong>Date of Birth:</strong> <?php echo $user['DOB']; ?></p>
                <p><strong>Email:</strong> <?php echo $user['email']; ?></p>
                <p><strong>Password:</strong> <?php echo $user['password']; ?></p>
                <div class="option-buttons">
                        <a href="update_users.php?id=<?php echo $user['user_id']; ?>" class="approve-btn">Update</a>
                        <a href="delete_users.php?id=<?php echo $user['user_id']; ?>" class="deny-btn">Delete</a>
                    </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</body>
</html>
