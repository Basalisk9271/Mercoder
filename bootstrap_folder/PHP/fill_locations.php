<?php

    //define array for user locations
    $user_locations = array();

    function getSubmissions($problemId, $api_key) {
        require('database_op.php');

        //gathers all usernames that have create submission for the problem
        $sql1 = "SELECT user_name FROM problem_attempts WHERE probId = '" . $problemId . "'";
         //think about preventing injection attacks
        $result1 = mysqli_query($con, $sql1);

        //for each username
        foreach ($result1 as $row) {
            $username = $row['user_name'];
            
            echo $username;
            echo "test1 "; //getting usernames well

            //gather their school, city
            $sql2 = "SELECT school, city FROM student_login WHERE username = " . $username;
            //$query = "SELECT school, city FROM student_login WHERE username = '" . $username . "'";
            $locations = mysqli_query($con, $sql2);

            echo $locations;
            echo "test2 ";

            //if there are values...
            if (mysqli_num_rows($locations) > 0) {
                $row = mysqli_fetch_assoc($locations);
                $location = $row['school'] . ', ' . $row['city'];
            } else {
                $location = '--error--';
            }
            //Using Geocode location
            require_once('geocode.php');
            $latLng = geocode($location, $api_key);

            //place the location, lat, long into json
            $user_locations[$username] = array(
                'location' => $location,
                'lat' => $latLng['lat'],
                'lng' => $latLng['lng']
            );
        }
        //set json to string 
        $user_locations_json = json_encode($user_locations);
        return $user_locations_json;
    }
?>