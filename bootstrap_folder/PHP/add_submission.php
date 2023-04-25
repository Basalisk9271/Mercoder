<?php

    include 'error_handling.php';
    
    //Connect to the database
    $con = mysqli_connect("localhost","root","wWpmX3wgUpArsP","mercoder");
    //Check the connection
    if(isset($_POST['submit'])) {
        //Check if the link box is empty
        if(!empty($_POST['link'])) {
            //setting link to a variable
            $link = $_POST['link'];
            //Find a way to get the session username 
            $user_name = $_SESSION['username'];
            //$placeholder_username = 'TEST';
            $date = date('d-m-Y');
            $query = "INSERT into problem_attempts (user_name, submission_date, submission_link) 
                      VALUES ('$user_name','$date','$link')";
            //Run query
            $run = mysqli_query($con,$query);
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
    //returning to page after submission
    header("Location: index.php");    
?>