<?php
	require('database_op.php');

    if (isset($_REQUEST['username']) && !isset($_REQUEST['name'])){ 
	$username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
	$school = $_REQUEST['school'];
	if(empty($school)){
		$school = NULL;
	}
	$city = $_REQUEST['city'];
        $query    = "INSERT into `student_login` (username, password, school, city)
                     VALUES ('$username', '" . md5($password) . "', '$school', '$city')";
	$result   = mysqli_query($con, $query);	
	
    } elseif(isset($_REQUEST['name'])) {
	$name = $_REQUEST['name'];
        $username    = $_REQUEST['username'];
	$school = $_REQUEST['school'];
	$classCode = $_REQUEST['classcode'];
	if(empty($classCode)){
		$classCode = NULL;
	}
        $password = $_REQUEST['password'];
	$city = $_REQUEST['city'];

        $query    = "INSERT into `teacher_login` (name, username, school, classcode, password, city)
                     VALUES ('$name', '$username', '$school', '$classCode', '" . md5($password) . "', '$city')";
	$result   = mysqli_query($con, $query);
	

	   }
?>
    

