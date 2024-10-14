<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Confirmation</title>
    <link rel="stylesheet" href="approvalcss.css">
</head>
<body>
<img src="images/miroslogo.png" alt="Miros Logo" class="logo">
    <h2 class="approve-title">Approve Users</h2>
    <form action="delete_user_process.php" method="POST">
        <input type="hidden" name="user_id" value="<?php echo $_GET['id']; ?>">
        <input type="submit" name="confirm" value="Confirm">
        <input type="submit" name="cancel" value="Cancel">
    </form>
</div>
</body>
</html>
