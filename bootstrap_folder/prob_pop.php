<?php

    $conn = mysqli_connect("localhost","root","Rayr3qNxsYT3iG","mercoder");
    
    // Step 2: Retrieve the information from the database
    $page_id = 1; // for example
    $sql = "SELECT title, description, sample_input, sample_output, description_input, description_output FROM probs WHERE title = 'An Hour Away'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    mysqli_close($conn);

?>