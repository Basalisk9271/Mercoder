<?php
require_once 'database_op.php'; 

// retrieve the form data from the $_POST superglobal
$username = $_POST['username'];
$password = $_POST['password'];
$school = $_POST['school'];
$city = $_POST['city'];

// construct a SQL query to update the user's account details
$query = "UPDATE users SET password = '$password', school = '$school', city = '$city' WHERE username = '$username'";

// execute the query
$conn->query($query);

if ($con->query($sql) === TRUE) {
    // echo "Record updated successfully.";
    header("Location: ../whatevertheaccountdetailspageiscalled.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

