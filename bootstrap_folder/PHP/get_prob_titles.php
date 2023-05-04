<?php
function getProbTitles() {
    require_once('database_op.php');
    // Retrieve the information from the database
    $sql = "SELECT title FROM probs";
    $result = mysqli_query($con, mysqli_real_escape_string($con, $sql));
    $rows = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row['title'];
    }

    mysqli_close($con);

    return json_encode($rows, JSON_NUMERIC_CHECK);
}
?>
