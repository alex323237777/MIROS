<?php

$db = new SQLite3('MIROS.db'); //connects to the database//

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['confirm'])) {

        $user_id = $_POST['user_id']; //assigns value for the primary key//

        $sql = "DELETE FROM Users WHERE user_id = $user_id"; //finds primary key to delete that specific record//

        $result = $db->exec($sql);

        if ($result) {
            echo "Record deleted successfully.";
        } else {
            echo "Error deleting record: " . $db->lastErrorMsg();
        }
    } elseif (isset($_POST['cancel'])) {

        header("Location: view_users.php"); //returned to view page after deletion//
        exit();
    }
}
?>
