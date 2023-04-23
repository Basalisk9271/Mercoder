<?php
    session_start();
    include 'error_handling.php';
    
    //Connect to the database
    $con = mysqli_connect("localhost","root","Rayr3qNxsYT3iG","mercoder");
    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "test1";
    // Define an empty array to store the results
    $problems = array();
    echo "test2";
    // Select the titles and descriptions from the database
    $sql = "SELECT title, description FROM problems";
    $result = mysqli_query($con, $sql);
    echo "test3";
    // Loop through the results and add them to the array
    while ($row = mysqli_fetch_assoc($result)) {
        $problems[] = array("problem" => $row["title"], "desc" => $row["description"]);
    }
    echo "test4";

    
    $_SESSION["problems"] = $problems;
    echo "test5";

    // Close the database connection
    mysqli_close($con);

?>