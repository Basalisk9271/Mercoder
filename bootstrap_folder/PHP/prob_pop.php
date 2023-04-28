<?php
function getProbDetails($problemId){
    require_once('database_op.php');
    
    // Step 2: Retrieve the information from the database
    $sql = "SELECT title, description, sample_input, sample_output, description_input, description_output FROM probs WHERE id = " . $problemId;
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    
    mysqli_close($con);
    return $row;
}

?>