<?php
$probName = $_POST['probName'];
require 'error_handling.php';
require_once'database_op.php';

echo 'Test';
echo $probName;
echo 'Test2';

// Retrieve the information from the database
$sql = "SELECT id FROM probs WHERE title = '" . $probName . "'";
$result = mysqli_query($con, $sql);
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





