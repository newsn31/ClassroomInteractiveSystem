<?php
	require_once('../databaseVariables.php');
	session_start();
	$username= $_POST['username'];
	
	
	
	$con=mysqli_connect($DBHOST, $DBUSER, $DBPASSWORD, $DATABASE);

//check connection
	if(mysqli_connect_errno($con))
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$query = "DELETE FROM course WHERE username ='$username'";

	$result = mysqli_query($con, $query) or die('Error querying database.');

	mysqli_close($con);
	echo "The student has been removed from the database.";
	require_once('courseHomepage.php');
?>