
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
	
	$query = "Select name from file where courseName ='{$_SESSION['course']}'";

	$result = mysqli_query($con, $query) or die('Error querying database.');
	echo 	"<link href='../CSS/index2.css' rel='stylesheet' type='text/css' /><form method='post' action='removeMaterial.php'>";
	echo	"<div class='styled-select'><select name='fileName'>";
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$var = $row['name'];
	
	echo	"<option value={$var}>{$row['name']}</option>;";
	
	}
	echo	"</select></div>";
	echo	"<input type='submit' value='Submit' /></form>";
	mysqli_free_result($result);

	mysqli_close($con);

	echo "<br>These are the files available to you.";
	echo "<br><p>Return to <a href='courseHomepage.php'>Homepage</a></p>";
?>