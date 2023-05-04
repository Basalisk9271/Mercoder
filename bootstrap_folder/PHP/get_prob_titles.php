<?php
function getProbTitles(){
    require_once('database_op.php');
    
    // Step 2: Retrieve the information from the database
    $sql = "SELECT title FROM probs";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    mysqli_close($con);
    $row_json = json_encode($row, JSON_NUMERIC_CHECK);
    return $row_json;
}
?>