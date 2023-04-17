<?php

    include 'error_handling.php';
    
    //Connect to the database
    $con = mysqli_connect("localhost","root","Rayr3qNxsYT3iG","mercoder");
    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    //Project Title

    // Retrieve the PROBLEM TITLE from the database
    $query = "SELECT title FROM `problems` WHERE title = '(SAMPLE). An Hour Away'";
    $result = mysqli_query($con, $query);
    
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $title = $row["title"];
        }
    } else {
        $title = "No title found";
    }

    echo '<div>' . $title . '</div>';

    mysqli_close($con);
?>