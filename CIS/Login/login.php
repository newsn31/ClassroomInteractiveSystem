<html>
	<link href="../CSS/index.css" rel="stylesheet" type="text/css" />
	<head>
		<title> Classroom Interactive System </title>
	</head>
		<body>
			
			<img id="logo" src="../Images/CIS_Logo.jpg" />
			<!--alt src="http://csudhcis.sytes.net/cis/images/CIS_Logo.jpg">
			<h2> Log-in </h2>
-->
			<form method="post" action="SessionLoginVerify.php">
				<label for="username">Username:</label>
				<input type="text" id="username" name="username" size="16" required="required"/><br />
				<label for="password">Password:</label>
				<input type="password" id="password" name="password" size="16" required="required"/><br />
				
				<?php require_once('captcha.php');?>
				
				<LoginButton align="center">
					<input type="image" src="../Images/loginButton.png" alt="Submit Form"/> <!--alt src="http://csudhcis.sytes.net/cis/images/loginButton.png"--> 	
				</LoginButton>
			</form>
		</body>
</html>