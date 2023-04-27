<?php

    $conn = mysqli_connect("localhost","root","wWpmX3wgUpArsP","mercoder");
    
    // Step 2: Retrieve the information from the database
    $page_id = 1; // for example
    $sql = "SELECT title, description, sample_input, sample_output, description_input, description_output FROM probs WHERE id = $page_id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    
    mysqli_close($conn);

?>