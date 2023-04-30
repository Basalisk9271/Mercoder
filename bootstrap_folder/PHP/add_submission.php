<?php
    session_start();
    $link = $_POST['link'];
    $probId =$_POST['problemId'];
    require 'database_op.php';
    //Check the connection
   
        //Check if the link box is empty
        if(!empty($_POST['link'])) {
            //setting link to a variable
            //Find a way to get the session username 
            //$user_name = $_SESSION['username'];
            $user_name = 'Bob';
            //$placeholder_username = 'TEST';
            $date = date('Y-m-d');
            $query = "INSERT into problem_attempts (user_name, probId, date, submission_link) 
                      VALUES ('$user_name',$probId ,'$date','$link')";
            //Run query
            $run = mysqli_query($con,$query);
                if($run){
                    echo " Form submission successful";
                } else {
                    echo " Error in form submission ";
                    echo "Error: " . $query . "<br>" . $con->error;
                }
        } else {
            //Display message if the link is not there
            echo "Please submit a link";
        }
    //returning to page after submission
    header("Location: ../index.php");    
?>