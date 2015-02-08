<?php
	require_once('../databaseVariables.php');
	session_start();
	$course= $_POST['course'];




	//create connection
	$con=mysqli_connect($DBHOST, $DBUSER, $DBPASSWORD, $DATABASE);

	//check connection
	if(mysqli_connect_errno($con))
		{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
	
	$query = "INSERT INTO course values ('{$_SESSION['username']}', '$course')";

	$result = mysqli_query($con, $query) or die('Error querying database.');

	mysqli_close($con);
	echo "Your course added to the database.";

	require_once('instructorInterface.php');
?>