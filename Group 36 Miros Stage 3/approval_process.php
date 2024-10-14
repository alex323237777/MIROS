<?php
$db = new SQLite3('MIROS.db');

if (isset($_POST['approve'])) {

    $request_id = $_POST['request_id'];

    $query = $db->prepare('SELECT * FROM SignUpRequests WHERE request_id = :request_id');
    $query->bindParam(':request_id', $request_id);
    $result = $query->execute()->fetchArray(SQLITE3_ASSOC);

    $user_query = $db->query('SELECT MAX(user_id) AS max_id FROM Users');
    $user_row = $user_query->fetchArray(SQLITE3_ASSOC);
    $new_user_id = ($user_row['max_id'] ?? 100) + 1;

    $insert_stmt = $db->prepare('INSERT INTO Users (user_id, user_Fname, user_Lname, DOB, email, password, role_id) VALUES (:user_id, :user_Fname, :user_Lname, :DOB, :email, :password, :role_id)');
    $insert_stmt->bindParam(':user_id', $new_user_id);
    $insert_stmt->bindParam(':user_Fname', $result['signup_fn']);
    $insert_stmt->bindParam(':user_Lname', $result['signup_ln']);
    $insert_stmt->bindParam(':DOB', $result['signup_DOB']);
    $insert_stmt->bindParam(':email', $result['signup_email']);
    $insert_stmt->bindParam(':password', $result['signup_password']);
    $insert_stmt->bindParam(':role_id', $result['signup_roleid']);
    $insert_stmt->execute();

    $delete_stmt = $db->prepare('DELETE FROM SignUpRequests WHERE request_id = :request_id');
    $delete_stmt->bindParam(':request_id', $request_id);
    $delete_stmt->execute();

    header('Location: approve_users.php');
    exit();
} elseif (isset($_POST['deny'])) {
    $request_id = $_POST['request_id'];

    $delete_stmt = $db->prepare('DELETE FROM SignUpRequests WHERE request_id = :request_id');
    $delete_stmt->bindParam(':request_id', $request_id);
    $delete_stmt->execute();

    header('Location: approve_users.php');
    exit();
}
?>
