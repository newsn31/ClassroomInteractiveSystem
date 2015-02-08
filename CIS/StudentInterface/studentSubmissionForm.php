<?php 
	session_start(); 
	$_SESSION['topic'] = $_POST['topic'];
?>

<html>
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" type="text/css" href="../css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="../css/demo.css" />
	<link rel="stylesheet" type="text/css" href="../css/component.css" />
	<script src="../js/modernizr.custom.js"></script>
	<meta name="description" content="Animated Checkboxes and Radio Buttons with SVG: Using SVG for adding some fancy 'check' animations to form inputs" />
	<meta name="keywords" content="animated checkbox, svg, radio button, styled checkbox, css, pseudo element, form, animated svg" />
	<meta name="author" content="Codrops" />
	<title>Classroom Interactive System</title>
</head>
<body>

<div class="container">
<section>
<form class="ac-custom ac-radio ac-fill" autocomplete="off" method="post" action="studentSubmission.php">
	<h2>Student Submission Form</h2>
	<h3>Feel free to submit any feedback regarding the lecture:</h3> <br /><br />
	<ul>
		<li><input id="r1" name="feedback" value="0" checked="checked" type="radio"><label for="r1">None</label></li>
		<li><input id="r2" name="feedback" value="1" type="radio"><label for="r2">Good</label></li>
		<li><input id="r3" name="feedback" value="2" type="radio"><label for="r3">Unclear</label></li>
		<li><input id="r4" name="feedback" value="3" type="radio"><label for="r4">Confusing</label></li>
		<li><input id="r5" name="feedback" value="4" type="radio"><label for="r5">More elaboration needed</label></li>
		<li><input id="r5" name="feedback" value="5" type="radio"><label for="r5">Terrible</label></li>
	</ul>
	
	<p>Any additional comments?</p>
	<textarea name="comment" cols="20" rows="5">Enter your comments here.</textarea>
	<input type="submit" value="Submit" name="submit" />	
</form>
</section>
</div>
<script src="../js/svgcheckbx.js"></script>
	
	Return to <a href='courseHomepageStudent.php'><?php echo "{$_SESSION['course']}"; ?> Homepage</a>

</body>
</html>


