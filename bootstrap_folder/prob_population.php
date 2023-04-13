<?php

    include 'error_handling.php';

    //Connect to the database
    $con = mysqli_connect("localhost","root","Rayr3qNxsYT3iG","mercoder");
    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // Retrieve the PROBLEM TITLE  from the database
    $query = "SELECT title FROM problems ";
    $result = mysqli_query($conn, $query);
    $val = mysqli_fetch_assoc($result);

    // Output the username as a JSON object
    echo json_encode($val);

     //Project Title

     //Project Date 
    
     //Problem Description

     //Input Description

     //Output Descrition

     //Sample Output 

     //Sample Input

     mysqli_close($con);
?>