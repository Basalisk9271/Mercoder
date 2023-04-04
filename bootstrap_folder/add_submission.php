<?php
    //Connect to the database
    $con = mysqli_connect("localhost","root","wWpmX3wgUpArsP","mercoder");

    //Check the connection
    if(isset($_POST['submit'])) {
        //Check if the link box is empty
        if(!empty($_POST['link'])) {
            //setting link to a variable
            $link = $_POST['link'];
            //Find a way to get the session username / date
            $placeholder_username = 'TEST';
            $placeholder_date = '1/1/2023';
            $query = "inser into problem_attempts values('$placeholder_username','$placeholder_date','$link')";
            
            //Run or cancel
            $run = mysqli_query($conn,$query) or die(mysqli_error());
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

