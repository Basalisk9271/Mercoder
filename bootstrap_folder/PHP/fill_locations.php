<?php
    require_once('geocode.php');

    function getSubmissions($problemId) {
        require('database_op.php');

        $sql = "SELECT user_name FROM problem_attempts WHERE probId = " . $problemId;
        $result = mysqli_query($con, $sql);

        $user_locations = array();

        foreach ($result as $username) {
            $query = "SELECT school, city FROM student_login";
            $locations = mysqli_query($con, $query);

            if (mysqli_num_rows($locations) > 0) {
                $row = mysqli_fetch_assoc($locations);
                $location = $row['school_name'] . ', ' . $row['city'];
            }
            //Using Geocode location
            $latLng = geocode($location, $api_key);

            $user_locations[$username] = array(
                'location' => $location,
                'lat' => $latLng['lat'],
                'lng' => $latLng['lng']
            );
        }
        //creating a json string of values
        $json_string = json_encode($user_locations);
        echo $json_string;
    }
?>