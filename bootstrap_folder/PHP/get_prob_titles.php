<?php
function getProbTitles() {
    require_once('database_op.php');
    // Retrieve the information from the database
    $sql = "SELECT title FROM probs ";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    
    mysqli_close($con);
    return $row;
}
?>
