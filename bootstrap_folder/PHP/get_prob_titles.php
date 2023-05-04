<?php
function getProbTitles() {
    require_once('database_op.php');
    // Retrieve the information from the database
    $sql = "SELECT title FROM probs";
    $result = mysqli_query($con, $sql);
    $rows = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row['title'];
    }

    mysqli_close($con);

    echo $rows;

    return json_encode($rows, JSON_NUMERIC_CHECK);
}
?>
