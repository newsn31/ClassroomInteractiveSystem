<?php 
if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
//	session_start();
	if (ISSET($_POST['topic'])){
		$_SESSION['topic']= $_POST['topic'];
	}
	
?>
<html>

<body>
<header><title>Classroom Interactive System</title>
<meta http-equiv="refresh" content="5" />
</header>

<!--
<iframe src="http://docs.google.com/viewer?url=http%3A%2F%2Fcsudhcis.sytes.net%2FCIS_V2%2Fdocuments%2F2.ppt&embedded=true" width="600" height="780" style="border: none;"></iframe>
-->


<iframe target="_blank" src="bargraphResult.php" width="350" height="300" style="border: none;"></iframe>

<iframe src="pieGraphResult.php" name="i001" target="_blank" width="500" height="300" frameset frameborder=0 id="i001" scrolling="no"></iframe>
<br>
<?php require_once('rssFeedResult.php'); ?>


<br><p>Return to <a href='courseHomepage.php'>Homepage</a></p>
</body>









</html>