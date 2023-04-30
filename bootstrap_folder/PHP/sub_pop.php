<?php
function getSubs($problemId){
    require('database_op.php');
    
    // Step 2: Retrieve the information from the database
    $sql = "SELECT user_name, date, submission_link FROM problem_attempts WHERE probId = " . $problemId;
    $result = mysqli_query($con, $sql);
    
    if (!$result) {
        printf("Error: %s\n", mysqli_error($con));
        exit();
    }

    $table = '';
    if (mysqli_num_rows($result) > 0) {
        $table .= '<table class="table table-bordered table-responsive">';
        $table .= '<thead class="thead"><tr><th>User</th><th>Date Submitted</th><th>Submission Link</th></tr></thead>';
        $table .= '<tbody>';
        while ($row = mysqli_fetch_assoc($result)) {
            $table .= '<tr>';
            $table .= '<td>' . $row['user_name'] . '</td>';
            $table .= '<td>' . $row['date'] . '</td>';
            $table .= '<td><a href="https://' . $row['submission_link'] . '">' . $row['submission_link'] . '</a></td>';
            $table .= '</tr>';
        }
        $table .= '</tbody>';
        $table .= '</table>';
    } else {
        $table = '<div class="h3" style="text-align: center;">No submissions found.</div>';
    
    }
    
    // Step 4: Return the HTML table
    return $table;
    
}
?>
