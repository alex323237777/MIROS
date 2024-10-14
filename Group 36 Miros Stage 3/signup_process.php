<?php

$db = new SQLite3('MIROS.db');

$query = $db->query('SELECT MAX(request_id) AS max_id FROM SignUpRequests');
$row = $query->fetchArray(SQLITE3_ASSOC);
$next_id = $row['max_id'] + 1;

$signup_fn = $_POST['signup_fn'];
$signup_ln = $_POST['signup_ln'];
$signup_DOB = $_POST['signup_DOB'];
$signup_email = $_POST['signup_email'];
$signup_password = $_POST['signup_password'];
$signup_roleid = $_POST['signup_roleid'];

$stmt = $db->prepare('INSERT INTO SignUpRequests (request_id, signup_fn, signup_ln, signup_DOB, signup_email, signup_password, signup_roleid) VALUES (:request_id, :signup_fn, :signup_ln, :signup_DOB, :signup_email, :signup_password, :signup_roleid)');
$stmt->bindParam(':request_id', $next_id);
$stmt->bindParam(':signup_fn', $signup_fn);
$stmt->bindParam(':signup_ln', $signup_ln);
$stmt->bindParam(':signup_DOB', $signup_DOB);
$stmt->bindParam(':signup_email', $signup_email);
$stmt->bindParam(':signup_password', $signup_password);
$stmt->bindParam(':signup_roleid', $signup_roleid);
$stmt->execute();

$db->close();

echo "Sign up successful!";
?>
