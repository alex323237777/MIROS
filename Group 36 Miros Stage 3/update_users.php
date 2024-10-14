<?php

$db = new SQLite3('MIROS.db');

if (isset($_GET['id'])) {

    $user_id = $_GET['id'];

    $sql = "SELECT * FROM Users WHERE user_id = $user_id";

    $result = $db->querySingle($sql, true);

    if ($result) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Users</title>
    <link rel="stylesheet" href="approval.css">
</head>
<body>
<img src="images/miroslogo.png" alt="Miros Logo" class="logo">
    <h2 class="approve-title">Update Users</h2>
    <form action="update_user_process.php" method="POST">
        <input type="hidden" name="user_id" value="<?php echo $result['user_id']; ?>">
        <div class="form-group">
            <label for="user_Fname">First Name:</label>
            <input type="text" name="user_Fname" value="<?php echo $result['user_Fname']; ?>" class="input-field">
        </div>
        <div class="form-group">
            <label for="user_Lname">Last Name:</label>
            <input type="text" name="user_Lname" value="<?php echo $result['user_Lname']; ?>" class="input-field">
        </div>
        <div class="form-group">
            <label for="DOB">Date of Birth:</label>
            <input type="date" name="DOB" value="<?php echo $result['DOB']; ?>" class="input-field">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" name="email" value="<?php echo $result['email']; ?>" class="input-field">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" value="<?php echo $result['password']; ?>" class="input-field">
        </div>
        <div class="button-container">
            <input type="submit" name="confirm" value="Confirm" class="get-started-btn">
        </div>
    </form>
</div>
</body>
</html>
<?php
    } else {
        echo "Record not found.";
    }
} else {
    echo "User ID not provided.";
}
?>
