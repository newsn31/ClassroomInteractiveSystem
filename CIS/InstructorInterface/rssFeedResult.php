<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <META HTTP-EQUIV="refresh" CONTENT="15">
  <title>Student Responses</title>
  <link rel="stylesheet" type="text/css" href="../CSS/style.css" />
</head>
<body>
  <h2>Student Responses</h2>

<?php
  require_once('../databaseVariables.php');
 

  // Connect to the database 
  $dbc = mysqli_connect($DBHOST, $DBUSER, $DBPASSWORD, $DATABASE); 

  
  $query = "SELECT * FROM studentResponse Where courseName = '{$_SESSION['course']}' and topicName = '{$_SESSION['topic']}' ORDER BY dateAndTime DESC LIMIT 5";
  
  $data = mysqli_query($dbc, $query);


    echo '<h4>Most recent student responses:</h4>';

    // Loop through the array of alien abductions, formatting them as HTML
    echo '<table width="100%">';
    while ($row = mysqli_fetch_array($data)) { 
      // Display each row as a table row
      echo '<tr><td colspan="3">' . $row['username'] . ' ' . '</a></td></tr>';
      echo '<tr><td><strong>Comment:</strong><br /> ' . $row['comment'];
	  echo '<td><strong>Date and Time:</strong><br /> ' . $row['dateAndTime'] .'</td></tr>';
    }
    echo '</table>';
	
	echo '<p><a href="newsfeed.php"><img style="vertical-align:top; border:none" src="../Images/rssicon.png" > Click to syndicate the student response news feed.</a></p>';



  mysqli_close($dbc);
?>

</body> 
</html>
