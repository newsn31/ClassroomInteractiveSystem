
<?php
	require_once('../databaseVariables.php');
	//create connection
	session_start();
	$con=mysqli_connect($DBHOST, $DBUSER, $DBPASSWORD, $DATABASE);

	//check connection
	if(mysqli_connect_errno($con))
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$query = "Select username from course where courseName ='{$_SESSION['course']}' and 
	username !='{$_SESSION['username']}'";

	$result = mysqli_query($con, $query) or die('Error querying database.');
	echo 	"<link href='../CSS/index2.css' rel='stylesheet' type='text/css' /><form method='post' action='removeStudent.php'>";
	echo	"<div class='styled-select'><select name='username'>";
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$var = $row['username'];
	
	echo	"<option value={$var}>{$row['username']}</option>;";
	
	}
	echo	"</select></div>";
	echo	"<input type='submit' value='Submit' /></form>";
	mysqli_free_result($result);

	mysqli_close($con);

	echo "<br>These are the students enrolled in this course.";
	echo "<br><p>Go back to <a href='instructorInterface.php'>Homepage</a></p>";
?>