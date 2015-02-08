<?php
	require_once('../databaseVariables.php');
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
//	session_start();
	if (ISSET($_POST['course'])){
		$_SESSION['course']= $_POST['course'];
		if(!ISSET($_SESSION['course'])) {
			$_SESSION['course'] = $course;
		}
	}
	
		
	
?>

<html>
	<link href="../CSS/index3.css" rel="stylesheet" type="text/css" />
	<head>
		<title><?php echo "{$_SESSION['course']}"; ?> Homepage</title>
	</head>
		<body>
			<div id="navcontainer">
			<ul>
				<li><h3><?php echo "{$_SESSION['course']}"; ?> Homepage</h3></li>
				
				
				<li><a href="../StudentInterface/selectTopicStudent.php">Select Topic</a></li>
				<li><a href="../StudentInterface/downloadMaterials.php">Download Materials</a></li>
			</ul>
			</div>
		</body>
</html>

