<?php
	require_once('../databaseVariables.php');
	session_start();
	$username= $_POST['username'];
	
	


	
	
	
	//create connection
	$con=mysqli_connect($DBHOST, $DBUSER, $DBPASSWORD, $DATABASE);

	//check connection
	if(mysqli_connect_errno($con))
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$query = "INSERT INTO course values ('$username', '{$_SESSION['course']}')";

	$result = mysqli_query($con, $query) or die('Error querying database.');
	
	
	
	mysqli_close($con);
	echo "$username has been added to the database.";
	
	
	echo "<br><p>Go back to <a href='courseHomepage.php'>Homepage</a></p>";
?>