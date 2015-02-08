<?php
	require_once('../databaseVariables.php');
	session_start();
	$fileName= $_POST['fileName'];
	
	
	
	$con=mysqli_connect($DBHOST, $DBUSER, $DBPASSWORD, $DATABASE);

//check connection
	if(mysqli_connect_errno($con))
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$query = "DELETE FROM file WHERE coursename ='{$_SESSION['course']}' and name ='$fileName'";

	$result = mysqli_query($con, $query) or die('Error querying database.');

	mysqli_close($con);
	echo "The file has been deleted from the database.";
	require_once('courseHomepage.php');
?>