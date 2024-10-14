<?php

$db = new SQLite3('MIROS.db');

$query = $db->query('SELECT * FROM SignUpRequests');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Approve Users</title>
    <link rel="stylesheet" href="approvalcss.css">
</head>
<body>
    <img src="images/miroslogo.png" alt="Miros Logo" class="logo">
    <h2 class="approve-title">Approve Users</h2>
    <div class="record-container">
        <?php while ($row = $query->fetchArray(SQLITE3_ASSOC)): ?>
            <div class="record-box">
                <p>Name: <?php echo $row['signup_fn'] . ' ' . $row['signup_ln']; ?></p>
                <p>Date of Birth: <?php echo $row['signup_DOB']; ?></p>
                <p>Email: <?php echo $row['signup_email']; ?></p>
                <p>Role ID: <?php echo $row['signup_roleid']; ?></p>
                <form action="approval_process.php" method="post">
                    <input type="hidden" name="request_id" value="<?php echo $row['request_id']; ?>">
                    <button class="approve-btn" type="submit" name="approve">Approve</button>
                    <button class="deny-btn" type="submit" name="deny">Deny</button>
                </form>
            </div>
        <?php endwhile; ?>
    </div>
</body>
</html>
