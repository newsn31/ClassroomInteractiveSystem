<?php
	require_once('../../CIS/databaseVariables.php');
	$username= $_POST['username'];
	$password= $_POST['password'];
	
	
	$con=mysqli_connect($DBHOST, $DBUSER, $DBPASSWORD, $DATABASE);

	//check connection
	if(mysqli_connect_errno($con))
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$query = "Select username, password, isInstructor from user where username='$username' and password=Sha('$password')";
	
	$result = mysqli_query($con, $query) or die('Error querying database 1.');
	
	if(mysqli_num_rows($result)==1) {
		session_start();
		$_SESSION['username'] = $username;
		echo "<p>Welcome $username.<p>";
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	
		if($row["isInstructor"]==1) {
			require_once('../InstructorInterface/instructorInterface.php');
		}
		else {
			require_once('../StudentInterface/studentInterface.php');
		}
	}
	else {
		echo "Your username/password were not found.";
		echo "<p>Go back to <a href=../Login/login.php>Log-in.</a></p>";
	}
	
?>
	
	