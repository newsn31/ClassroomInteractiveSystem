<?php
	require_once('../databaseVariables.php');
	session_start();
	$topic= $_POST['topic'];




	//create connection
	$con=mysqli_connect($DBHOST, $DBUSER, $DBPASSWORD, $DATABASE);

	//check connection
	if(mysqli_connect_errno($con))
		{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
	
	$query = "INSERT INTO topic values ('{$_SESSION['course']}', '$topic')";

	$result = mysqli_query($con, $query) or die('Error querying database.');

	mysqli_close($con);
	echo "Your topic added to the database.";

	
?>
<?php require_once('courseHomepage.php'); ?>