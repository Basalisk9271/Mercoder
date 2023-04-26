<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>MERCODER</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Simple line icons-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />
    </head>
</html>
<?php 
//header('Content-Type: application/javascript');
// Include the database configuration file  
require_once ('database_op.php');
 
// If file upload form is submitted 
$stmt = $con->query("SELECT title, description FROM probs ORDER BY id DESC");
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

