<?php
session_start();

$db = new SQLite3('MIROS.db');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $roleId = $_POST['role_id'];

    $statement = $db->prepare('SELECT * FROM Users WHERE email = :email AND password = :password');
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);
    $result = $statement->execute();

    if ($row = $result->fetchArray()) {
        
        $roleIdStatement = $db->prepare('SELECT * FROM Role WHERE role_id = :roleId');
        $roleIdStatement->bindValue(':roleId', $roleId);
        $roleIdResult = $roleIdStatement->execute();

        if ($roleRow = $roleIdResult->fetchArray()) {
            switch ($roleId) {
                case 3:
                    $_SESSION['user'] = $email;
                    header('Location: ResearchOfficerDashboard.php');
                    exit();
                case 2:
                    $_SESSION['user'] = $email;
                    header('Location: SupervisorDashboard.php');
                    exit();
                case 1:
                    $_SESSION['user'] = $email;
                    header('Location: TopManagementDashboard.php');
                    exit();
                case 4:
                    $_SESSION['user'] = $email;
                    header('Location: AdminDashboard.php');
                    exit();
                default:
                    $error = "Invalid role ID. Please try again.";
                    break;
            }
        } else {
            $error = "Invalid role ID. Please try again.";
        }
    } else {
        $error = "Invalid email or password. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="loginstyles.css"> 
</head>
<body>
    <div class="container">
        <div class="left-side"></div>
        <div class="right-side">
        <h2>Sign In</h2>
            <form action="login.php" method="post">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input class="input-field" type="text" id="email" name="email" required><br><br>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input class="input-field" type="password" id="password" name="password" required><br><br>
                </div>
                <div class="form-group">
                    <label for="role_id">Role ID:</label>
                    <input class="input-field" type="text" id="role_id" name="role_id" required><br><br>
                </div>
                <div>Want to <a href=Signup.php>sign up?</a></div>
                <?php if (isset($error)) { ?>
                    <p style="color: red;"><?php echo $error; ?></p>
                <?php } ?>
                <button type="submit" class="submit-btn">Login</button><br>
            </form>
        </div>
    </div>
</body>
</html>
