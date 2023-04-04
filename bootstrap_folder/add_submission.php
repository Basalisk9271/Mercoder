<?php
    //Error catching
    ini_set("display_errors", "1");
    ini_set("display_startup_errors", 1);
    error_reporting(E_ALL);

    //Connect to the database
    $con = mysqli_connect("localhost","root","Rayr3qNxsYT3iG","mercoder");

    //Check the connection
    if(isset($_POST['submit'])) {
        //Check if the link box is empty
        if(!empty($_POST['link'])) {
            //setting link to a variable
            $link = $_POST['link'];
            //Find a way to get the session username / date
            $placeholder_username = 'TEST';
            $placeholder_date = '1/1/2023';
            $query = "insert into 'problem_attempts' (user_name, date, submission_link) values ('$placeholder_username','$placeholder_date','$link')";
            echo "THIS IS A TEST STATEMENT 1";
            //Run or cancel
            $run = mysqli_query($conn,$query);

            echo "THIS IS A TEST STATEMENT 2";

                if($run){
                    echo " Form submission successful";
                } else {
                    echo " Error in form submission ";
                }
        } else {
            //Display message if the link is not there
            echo "please submit a link";
        }
    }
?>

