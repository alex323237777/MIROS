<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Users</title>
    <link rel="stylesheet" href="signupcss.css">
</head>
<body>
    <img src="images/miroslogo.png" alt="Miros Logo" class="logo">
    <div class="signup-form">
        <h2 class="signup-title">Create Users</h2>
        <form action="create_users_process.php" method="post">
        <div class="input-container">
            <label for="user_Fname">First Name:</label>
            <input type="text" id="user_Fname" name="user_Fname">
        </div>
        <div class="input-container">
            <label for="user_Lname">Last Name:</label>
            <input type="text" id="user_Lname" name="user_Lname">
        </div>
        <div class="input-container">
            <label for="DOB">Date of Birth:</label>
            <input type="date" id="DOB" name="DOB">
        </div>
        <div class="input-container">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
        </div>
        <div class="input-container">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
        </div>
        <div class="input-container">
            <label for="role_id">Role ID:</label>
            <input type="text" id="role_id" name="role_id">
        </div>
        <button class="get-started-btn" type="submit">Create User</button>
    </div>
</body>
</html>
