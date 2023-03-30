<?php
	require('database_op.php');

    if (isset($_REQUEST['username']) && !isset($_REQUEST['name'])){ 
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con, $password);
	$school = stripslashes($_REQUEST['school']);
	if (empty($school)){
		$school = "";
	}
	$city = stripslashes($_REQUEST['city']);
	$city = mysqli_real_escape_string($con, $school);
        $query    = "INSERT into `student_login` (username, password, school, city)
                     VALUES ('$username', '" . md5($password) . "', '$school', '$city')";
	$result   = mysqli_query($con, $query);	

    } else {
	$name = stripslashes($_REQUEST['name']);
        $name = mysqli_real_escape_string($con, $name);
        $username    = stripslashes($_REQUEST['username']);
	$username    = mysqli_real_escape_string($con, $username);
	$school = stripslashes($_REQUEST['school']);
	$school = mysqli_real_escape_string($con, $school);
	$classCode = stripslashes($_REQUEST['classcode']);
	if (empty($classCode)){
		$classCode = "";
	}
	$classCode = mysqli_real_escape_string($con, $classCode);
        $password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con, $password);
	$city = stripslashes($_REQUEST['city']);
	$city = mysqli_real_escape_string($con, $city);

        $query    = "INSERT into `teacher_login` (name, username, school, classcode, password, city)
                     VALUES ('$name', '$username', '$school', '$classCode', '" . md5($password) . "', '$city')";
	$result   = mysqli_query($con, $query);


	   }
?>
    

