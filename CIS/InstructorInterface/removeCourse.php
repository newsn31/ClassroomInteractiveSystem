<?php
	require_once('../databaseVariables.php');
	session_start();
	$course= $_POST['course'];
	
	
	
	$con=mysqli_connect($DBHOST, $DBUSER, $DBPASSWORD, $DATABASE);

//check connection
	if(mysqli_connect_errno($con))
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$query = "DELETE FROM course WHERE username ='{$_SESSION['username']}' and courseName ='$course'";

	$result = mysqli_query($con, $query) or die('Error querying database.');

	mysqli_close($con);
	echo "The course has been deleted from the database.";
	require_once('instructorInterface.php');
?>