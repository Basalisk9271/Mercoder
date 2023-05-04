<?php
session_start();
if ($_SESSION['loggedin'] == 1 || $_SESSION['loggedin'] == 2){
    if ($_SESSION['loggedin'] == 1){
        $acctType = "student";
    } else {
        $acctType = "teacher";
    }
}
require_once 'database_op.php'; 

// retrieve the form data from the $_POST superglobal
$username = $_SESSION['username'];
$oldPass = $_POST['oldPass'];
$newPass = $_POST['newPass'];
$school = $_POST['school'];
$city = $_POST['city'];

$stmt = $con->prepare("SELECT COUNT(*) FROM " . $acctType . "_login WHERE username = ? AND password = ?");
$stmt->bind_param("ss", $username, md5($oldPass));
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->free_result();
// check if the password is correct
if ($count > 0) {
    // construct a SQL query2 to update the user's account details
    $query2 = "UPDATE " . $acctType . "_login SET password = '" . md5($newPass) . "', school = '" . addslashes($school) . "', city = '" . addslashes($city) . "' WHERE username = '" . $username . "'";

    // execute the query2
    if ($con->query($query2) === TRUE) {
        // echo "New record created successfully";
        header("Location: /mercoder/PHP/user_profile.php");
    } else {
        echo "Error: " . $query2 . "<br>" . $con->error;
    }
} else {
    header("Location: /mercoder/PHP/update_form.php");
}
?>

