<?php
require_once 'database_op.php'; 

// Retrieve data from form
$title = $_POST['title'];
$author = $_POST['author'];
$date_created = $_POST['date_created'];
$description = $_POST['description'];
$sample_input = $_POST['sample_input'];
$sample_output = $_POST['sample_output'];
$description_input = $_POST['description_input'];
$description_output = $_POST['description_output'];

// Insert data into database
$sql = "INSERT INTO problems (title, author, date_created, description, sample_input, sample_output, description_input, description_output) VALUES ('$title', '$author', '$date_created', '$description', '$sample_input', '$sample_output', '$description_input', '$description_output')";

if ($con->query($sql) === TRUE) {
    // echo "New record created successfully";
    header("Location: ../index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

