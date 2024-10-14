<?php

$db = new SQLite3('MIROS.db'); //connects to the database//

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['confirm'])) {

        $user_id = $_POST['user_id']; //assigning values for each of the rows of the table//
        $fn = $_POST['user_Fname'];
        $ln = $_POST['user_Lname'];
        $dob = $_POST['DOB'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
//updating record with Databse values linked to their assigned code values//
        $sql = "UPDATE Users SET user_Fname='$fn', user_Lname='$ln', DOB='$dob', email='$email', password='$pass' WHERE user_id=$user_id";

        $result = $db->exec($sql);

        if ($result) {
            echo "Record updated successfully.";
        } else {
            echo "Error updating record: " . $db->lastErrorMsg(); //messages for success or failure//
        }
    } elseif (isset($_POST['cancel'])) {

        header("Location: view_users.php"); //returns user to view page after completion//
        exit();
    }
}
?>
