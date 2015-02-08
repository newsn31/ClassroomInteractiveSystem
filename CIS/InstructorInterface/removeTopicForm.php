
<?php
	echo "<html><h1>Remove Topic</h1></html>";
	require_once('../databaseVariables.php');
	
	//create connection
	session_start();
	$con=mysqli_connect($DBHOST, $DBUSER, $DBPASSWORD, $DATABASE);

	//check connection
	if(mysqli_connect_errno($con))
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$query = "Select topicName from topic where courseName ='{$_SESSION['course']}'";

	$result = mysqli_query($con, $query) or die('Error querying database.');
	echo 	"<form method='post' action='removeTopic.php'>";
	echo	"<select name='topic'>";
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$var = $row['topicName'];
	
	echo	"<option value={$var}>{$row['topicName']}</option>;";
	
	}
	echo	"</select>";
	echo	"<input type='submit' value='Submit' /></form>";
	mysqli_free_result($result);

	mysqli_close($con);

	echo "<br>These are the topics available to you.";
	echo "<p>Go back to <a href='courseHomepage.php'>Homepage</a></p>";
?>