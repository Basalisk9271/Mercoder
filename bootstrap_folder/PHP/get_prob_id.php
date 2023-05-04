<?php
$probName = $_POST['probName'];
require 'error_handling.php';
require 'database_op.php';

echo 'Test';
echo $probName;
echo 'Test2';

// Retrieve the information from the database
$sql = "SELECT id FROM probs WHERE title = '" . $probName . "'";
echo 'Test3';
$result = mysqli_query($con, mysqli_real_escape_string($con, $sql));
echo $result;
echo 'Test4';
if (!$result) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}

$rows = array();
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row['id'];
}

mysqli_close($con);
echo $rows[0];
?>





