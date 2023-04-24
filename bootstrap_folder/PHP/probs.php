<?php
require_once 'database_op.php';

$sql = "SELECT title, description FROM probs";

// Execute the query and fetch all results
$stmt = $con->query($sql);
$results = $stmt->fetch_assoc();


// Encode the results as JSON
$json = json_encode($results);
header('Content-Type: application/json');

var_dump($json);

?>

