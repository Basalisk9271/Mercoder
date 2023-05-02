<?php

// Replace YOUR_API_KEY with your actual API key
$api_key = 'YOURAPIKEY';

// Get the location to search for from the user
$location = isset($_GET['location']) ? $_GET['location'] : '';

// If no location was specified, show a form to enter one
if (empty($location)) {
    echo '<form action="" method="get">';
    echo '<label for="location">Location:</label>';
    echo '<input type="text" id="location" name="location">';
    echo '<button type="submit">Search</button>';
    echo '</form>';
} else {
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

        // Output the latitude and longitude to the user
        echo "Latitude: $lat<br>";
        echo "Longitude: $lng";
    } else {
        // If the API did not return any results, show an error message
        echo 'Sorry, no results were found for that location.';
    }
}
