<?php 
//header('Content-Type: application/javascript');
// Include the database configuration file  
require_once ('database_op.php');
 
// If file upload form is submitted 
$stmt = $con->query("SELECT title, description FROM probs");
// Create a PHP array to hold the data
$data = array();
    while ($row = mysqli_fetch_assoc($stmt)) {
        $data[] = $row;
    }

if (count($data) == 0) {
    die("No data returned from database");
}

// Output the data as a JSON-encoded string, and assign it to the probs variable
echo '<script> var probs = ' .json_encode($data). '; console.log(probs); </script>';
?>
