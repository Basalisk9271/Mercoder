<?php
$probName = $_POST['probName'];
require('database_op.php');
require('error_handling.php');

// Retrieve the information from the database
$sql = "SELECT probid FROM probs WHERE title = '" . $probName . "'";
$result = mysqli_query($con, mysqli_real_escape_string($con, $sql));
$rows = array();
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row['probid'];
}

mysqli_close($con);

echo $rows[0]; // Access the first element of the $rows array
?>