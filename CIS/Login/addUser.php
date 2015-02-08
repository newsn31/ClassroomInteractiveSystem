<?php
	require_once('../databaseVariables.php');
	$username= $_POST['username'];
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
	
	$query = "INSERT INTO user values ('$username', sha1('$password'), '$email', '$tel', '$cellPhoneProvider', '0')";

	$result = mysqli_query($con, $query) or die('Error querying database.');

	mysqli_close($con);
	echo "Your information added to the database.";
	echo "<p>Go back to <a href=../../LaunchPage/index.php>Launch Page.</a></p>";




?>