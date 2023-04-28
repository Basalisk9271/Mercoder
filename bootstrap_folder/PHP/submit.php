<?php
require_once 'database_op.php'; 

// Retrieve data from form and escape special characters
$title = mysqli_real_escape_string($con, $_POST['title']);
$author = mysqli_real_escape_string($con, $_POST['author']);
$date_created = date('Y-m-d');
//mysqli_real_escape_string($con, $_POST['date_created']);
$description = mysqli_real_escape_string($con, $_POST['description']);
$sample_input = mysqli_real_escape_string($con, $_POST['sample_input']);
$sample_output = mysqli_real_escape_string($con, $_POST['sample_output']);
$description_input = mysqli_real_escape_string($con, $_POST['description_input']);
$description_output = mysqli_real_escape_string($con, $_POST['description_output']);

// Insert data into database
$sql = "INSERT INTO probs (title, author, date_created, description, sample_input, sample_output, description_input, description_output) VALUES ('$title', '$author', '$date_created', '$description', '$sample_input', '$sample_output', '$description_input', '$description_output')";

if ($con->query($sql) === TRUE) {
    // echo "New record created successfully";
    header("Location: ../index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
