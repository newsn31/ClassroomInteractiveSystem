<?php 
	session_start(); 
	
?>

<html>
<head>
	<title>Classroom Interactive System</title>
</head>
<body>


<form method="post" action="sms.php">
	<h2>Class Announcement</h2>
	Subject:<textarea name="subject" cols="20" rows="1"></textarea>
	<br>
	<textarea name="message" cols="40" rows="5">Enter your announcement here.</textarea>
	<input type="submit" value="Submit" name="submit" />	
</form>


	
	Return to <a href='courseHomepage.php'><?php echo "{$_SESSION['course']}"; ?> Homepage</a>

</body>
</html>


