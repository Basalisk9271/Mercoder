<?php

    $conn = mysqli_connect("localhost","root","wWpmX3wgUpArsP","mercoder");
    
    // Step 2: Retrieve the information from the database
    $page_id = 1; // for example
    $sql = "SELECT title, description, sample_input, sample_output, description_input, description_output FROM probs WHERE id = $page_id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $title = $row['title'];
    $description = $row['description'];
    $sample_input = $row['sample_input'];
    $sample_output = $row['sample_output'];
    $description_output = $row['description_output'];
    $description_input = $row['description_input'];

    mysqli_close($conn);

?>