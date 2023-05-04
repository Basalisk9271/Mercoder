<?php
function getProblemTitles() {
    require_once 'database_op.php'; 
    
    $sql = "SELECT title FROM probs"; 
    $result = mysqli_query($con, $sql);

    $titles = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $titles[] = $row['title'];
    }

    mysqli_close($con);

    return $titles;
}
?>
