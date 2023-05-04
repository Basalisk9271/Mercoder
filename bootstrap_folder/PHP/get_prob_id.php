<?php

    require 'error_handling.php';
    echo "TESTING ";
    $probName = $_POST['probName'];
    echo  $probName ;
    require('database_op.php');
    // Retrieve the information from the database
    $sql = "SELECT id FROM probs WHERE title = '" . $probName . "'";
    $result = mysqli_query($con, mysqli_real_escape_string($con, $sql));
    $row = mysqli_fetch_assoc($result);

    echo $row;
    $probId = (int) $row['id'];

    mysqli_close($con);

    echo $probId;
?>