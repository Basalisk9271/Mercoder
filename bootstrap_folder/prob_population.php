<?php

    include 'error_handling.php';
    
    //Connect to the database
    $con = mysqli_connect("localhost","root","Rayr3qNxsYT3iG","mercoder");
    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Define an empty array to store the results
    $problems = array();

    // Select the titles and descriptions from the database
    $sql = "SELECT title, description FROM problems";
    $result = mysqli_query($con, $sql);

    // Loop through the results and add them to the array
    while ($row = mysqli_fetch_assoc($result)) {
        $problems[] = array("problem" => $row["title"], "desc" => $row["description"]);
    }

    session_start();
    $_SESSION["problems"] = $problems;

    // Close the database connection
    mysqli_close($con);

?>