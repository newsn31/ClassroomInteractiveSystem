<?php
	require_once('../databaseVariables.php');
	session_start();
	$feedback= intval($_POST['feedback']);
	$comment= $_POST['comment'];
	



	//create connection
	$con=mysqli_connect($DBHOST, $DBUSER, $DBPASSWORD, $DATABASE);

	//check connection
	if(mysqli_connect_errno($con))
		{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
	
	$query = "
		INSERT INTO studentResponse
		values ('{$_SESSION['course']}', '{$_SESSION['topic']}', '{$_SESSION['username']}', '$feedback', '$comment', NOW())";

	$result = mysqli_query($con, $query) or die('Error querying database.');

	mysqli_close($con);
	echo "Your submission was added to the database.";

	require_once('courseHomepageStudent.php');
?>