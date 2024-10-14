<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="signupcss.css">
</head>
<body>
    <img src="images/miroslogo.png" alt="Miros Logo" class="logo">
    <div class="signup-form">
        <h2 class="signup-title">Sign Up</h2>
        <form action="signup_process.php" method="post">
        <div class="input-container">
            <label for="signup_fn">First Name:</label>
            <input type="text" id="signup_fn" name="signup_fn">
        </div>
        <div class="input-container">
            <label for="signup_ln">Last Name:</label>
            <input type="text" id="signup_ln" name="signup_ln">
        </div>
        <div class="input-container">
            <label for="signup_DOB">Date of Birth:</label>
            <input type="date" id="signup_DOB" name="signup_DOB">
        </div>
        <div class="input-container">
            <label for="signup_email">Email:</label>
            <input type="email" id="signup_email" name="signup_email">
        </div>
        <div class="input-container">
            <label for="signup_password">Password:</label>
            <input type="password" id="signup_password" name="signup_password">
        </div>
        <div class="input-container">
            <label for="signup_roleid">Role ID:</label>
            <input type="integer" id="signup_roleid" name="signup_roleid">
        </div>
        <button class="get-started-btn" type="submit">Get Started</button>
    </div>
</body>
</html>
