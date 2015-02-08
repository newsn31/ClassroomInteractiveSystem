<?php
	require_once('../databaseVariables.php');
	session_start();
	$topic= $_POST['topic'];
	
	
	
	
	$con=mysqli_connect($DBHOST, $DBUSER, $DBPASSWORD, $DATABASE);

//check connection
	if(mysqli_connect_errno($con))
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$query = "DELETE FROM topic WHERE courseName ='{$_SESSION['course']}' and topicName ='$topic'";

	$result = mysqli_query($con, $query) or die('Error querying database.');

	mysqli_close($con);
	print_r($_SESSION);
	echo "The topic has been deleted from the database.";
	
	require_once('courseHomepage.php');
	
?>