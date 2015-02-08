<?php
	require_once('../databaseVariables.php');
	require("class.phpmailer.php");
	
	session_start();
	$message = $_POST['message'];
	$subject = $_POST['subject'];
	
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = "ssl";  // sets the prefix to the servier
	$mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
	$mail->Port = 465; // set the SMTP port for the GMAIL server
	$mail->From = "csc546cis@gmail.com";
	$mail->FromName = "CSUDH CIS";
	$mail->Username = "csc546cis@gmail.com";
    $mail->Password =  "csudh546";
	$mail->Subject = $subject;
	$mail->SMTPKeepAlive = true;  
	$mail->Mailer = "smtp"; 
	$mail->SMTPDebug  = 1;   

	
	
	
	//create connection
	$con=mysqli_connect($DBHOST, $DBUSER, $DBPASSWORD, $DATABASE);

	//check connection
	if(mysqli_connect_errno($con))
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$query = "SELECT user.isInstructor, user.email, user.telephone, user.cellPhoneProvider, course.username FROM user, course where user.username = course.username and user.isInstructor = 0 
	and course.courseName = '{$_SESSION['course']}'";
	$result = mysqli_query($con, $query);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	//	$SMSText = "{$row['telephone']}{$row['cellPhoneProvider']}" ;
	//	$email = "{$row['email']}";
		$mail->AddAddress("{$row['telephone']}{$row['cellPhoneProvider']}");
		$mail->AddAddress("{$row['email']}");
		$mail->Body = "$message";
		$mail->WordWrap = 120;
		if(!$mail->Send()) {
		echo "Text message sent: SMS <br/>";
		echo "Mailer Error: " . $mail->ErrorInfo . "<br/>";
	} else {
		echo "notification sent ";
	}
	}
	
	
	echo "<br><p>Go back to <a href='courseHomepage.php'>Homepage</a></p>";
?>