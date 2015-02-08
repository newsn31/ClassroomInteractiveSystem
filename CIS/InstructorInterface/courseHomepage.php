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
	<link href="../CSS/index.css" rel="stylesheet" type="text/css" />
	<head>
		<title><?php echo "{$_SESSION['course']}"; ?> Homepage</title>
		  <link rel="stylesheet" type="text/css" href="../CSS/styles.css" />
			<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
			<script src="../js/main.js" type="text/javascript"></script>  
	</head>
		<body>
			<div id='cssmenu'>
<ul>
   <li><a href='#'><span><?php echo "{$_SESSION['course']}"; ?> Home</span></a></li>
   <li><a href="../InstructorInterface/SMSForm.php"><span>Class Announcement</span></a></li>
   <li><a href='#'><span>Topic Menu</span></a>
      <ul>
         <li><a href="../InstructorInterface/selectTopicInstructor.php">Select Topic</a></li>
         <li><a href="../InstructorInterface/addTopicForm.php">Add Topic</a></li>
         <li><a href="../InstructorInterface/removeTopicForm.php">Remove Topic</a></li>
      </ul>
   </li>
   <li><a href='#'><span>Materials Menu</span></a>
      <ul>
         <li><a href="../InstructorInterface/viewMaterial.php">View Material</a></li>
         <li><a href="../InstructorInterface/addMaterialForm.php">Add Material</a></li>
		 <li><a href="../InstructorInterface/removeMaterialForm.php">Remove Material</a></li>
      </ul>
   </li>
   <li><a href='#'><span>Student Menu</span></a>
      <ul>
		<li><a href="../InstructorInterface/addStudentForm.php">Add Student</a></li>
		<li><a href="../InstructorInterface/removeStudentForm.php">Remove Student</a></li>
	  </ul>
	</ul>
</ul>
</div>

</body>
</html>
