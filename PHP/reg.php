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
	
	$teach_query  = "SELECT * FROM `teacher_login` WHERE username='$username'"; 
	$stu_query = "SELECT * FROM `student_login` WHERE username='$username'";
	$teach_result = mysqli_query($con, $teach_query) or die(mysql_error());
	$stu_result = mysqli_query($con, $stu_query) or die(mysql_error());
	$teach_rows = mysqli_num_rows($teach_result);
	$stu_rows = mysqli_num_rows($stu_result);

    if ($teach_rows == 0 && $stu_rows == 0){    
	$query    = "INSERT into `student_login` (username, password, school, city)
					VALUES ('$username', '" . md5($password) . "', '$school', '$city')";
	$result   = mysqli_query($con, $query);	
	} else{
		header("Location: index.php");
	}
	
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
	
	$teach_query  = "SELECT * FROM `teacher_login` WHERE username='$username'"; 
	$stu_query = "SELECT * FROM `student_login` WHERE username='$username'";
	$teach_result = mysqli_query($con, $teach_query) or die(mysql_error());
	$stu_result = mysqli_query($con, $stu_query) or die(mysql_error());
	$teach_rows = mysqli_num_rows($teach_result);
	$stu_rows = mysqli_num_rows($stu_result);

	if ($teach_rows == 0 && $stu_rows == 0){
        $query    = "INSERT into `teacher_login` (name, username, school, classcode, password, city)
                     VALUES ('$name', '$username', '$school', '$classCode', '" . md5($password) . "', '$city')";
		$result   = mysqli_query($con, $query);
	} else{
		header("Location: index.php");
	}

	}
?>
    

