<?php
// Connect to MySQL database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "testdatabase";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from form
$title = $_POST['title'];
$author = $_POST['author'];
$date_created = $_POST['date_created'];
$description = $_POST['description'];
$sample_input = $_POST['sample_input'];
$sample_output = $_POST['sample_output'];

// Insert data into database
$sql = "INSERT INTO problems (title, author, date_created, description, sample_input, sample_output) VALUES ('$title', '$author', '$date_created', '$description', '$sample_input', '$sample_output')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

