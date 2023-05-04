<?php

// Replace YOUR_API_KEY with your actual API key
//added $api_key to the parameter list, needed to be included in scope of function
$api_key = 'AIzaSyAV2jXEkwfKvpehW3TGhQMu8FXQrZ16sNQ';

function geocode($location, $api_key){
    
    // Get the location to search for from the user
    //$location = isset($_GET['location']) ? $_GET['location'] : '';

        // Construct the API request URL
        $url = 'https://maps.googleapis.com/maps/api/geocode/json?address=' . urlencode($location) . '&key=' . $api_key;

        // Send the API request and get the response
        $response = file_get_contents($url);

        // Parse the JSON response into a PHP array
        $data = json_decode($response, true);

        // Check if the API returned any results
        if ($data['status'] == 'OK') {
            // Extract the latitude and longitude from the first result
            $lat = $data['results'][0]['geometry']['location']['lat'];
            $lng = $data['results'][0]['geometry']['location']['lng'];
            $latLng = array('lat' => $lat, 'lng' => $lng);
            // Output the latitude and longitude to the user
            return $latLng;
        }
    }