<?php

    function getSubmissions($problemId, $api_key) {
        require('database_op.php');

        //gathers all usernames that have create submission for the problem
        $sql = "SELECT user_name FROM problem_attempts WHERE probId = " . $problemId; //think about preventing injection attacks
        $result = mysqli_query($con, $sql);

        //define array for user locations
        $user_locations = array();

        //for each username
        foreach ($result as $row) {
            $username = $row['user_name'];
            
            //gather their school, city
            $query = "SELECT school, city FROM student_login WHERE username = " . $username;
            $locations = mysqli_query($con, $query);

            //if there are values...
            if (mysqli_num_rows($locations) > 0) {
                $row = mysqli_fetch_assoc($locations);
                $location = $row['school'] . ', ' . $row['city'];
            } else {
                $location = '';
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