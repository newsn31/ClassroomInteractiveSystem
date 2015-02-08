<?php
	require_once('../databaseVariables.php');
	session_start();
	$password= $_POST['password'];
	$email= $_POST['email'];
	$tel= $_POST['tel'];
	$cellPhoneProvider= $_POST['provider'];
	
	
	$con=mysqli_connect($DBHOST, $DBUSER, $DBPASSWORD, $DATABASE);

	//check connection
	if(mysqli_connect_errno($con))
		{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
	
	$query = "UPDATE `user` SET `password` = sha1('$password'), `email` = '$email', `telephone` = '$tel', `cellPhoneProvider` = '$cellPhoneProvider' WHERE `username` = '{$_SESSION['username']}'";
	
	

	$result = mysqli_query($con, $query) or die('Error querying database.');

	mysqli_close($con);
	echo "Your information has been updated.";
	echo "<br>Return to <a href='instructorInterface.php'>Homepage</a>"




?>