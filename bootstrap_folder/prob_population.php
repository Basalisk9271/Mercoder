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
    $title = mysqli_fetch_assoc($result);

    // display the title in html format
    echo "<div class='title'>$title</div>";

    /*
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["col1"];
        $field2name = $row["col2"];
        $field3name = $row["col3"];
        $field4name = $row["col4"];
        $field5name = $row["col5"];
    }
    */
    





     

     //Project Date 
    
     //Problem Description

     //Input Description

     //Output Descrition

     //Sample Output 

     //Sample Input

     mysqli_close($con);
?>