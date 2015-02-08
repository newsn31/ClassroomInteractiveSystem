<?php header('Content-Type: text/xml'); ?>
<?php echo '<?xml version="1.0" encoding="utf-8"?>'; ?>

<rss version="2.0">
  <channel>
    <title>Student Responses - Newsfeed</title>
	    <description>Student Submissions.</description>    <language>en-us</language>

<?php
	
  require_once('../databaseVariables.php');

  // Connect to the database 
  $dbc = mysqli_connect($DBHOST, $DBUSER, $DBPASSWORD, $DATABASE); 

  // Retrieve the alien sighting data from MySQL
  $query = "SELECT username, feedback, comment, dateAndTime FROM studentResponse ORDER BY dateAndTime DESC";
  $data = mysqli_query($dbc, $query);

  // Loop through the array of alien sighting data, formatting it as RSS
  while ($row = mysqli_fetch_array($data)) {
    // Display each row as an RSS item
    echo '<item>';
    echo '  <title>' . $row['username']  . "...      feedback:  "  . substr($row['feedback'], 0, 32) . '</title>';
    echo '  <pubDate>' . $row['dateAndTime'] . '</pubDate>';
    echo '  <description>' . $row['comment'] . '</description>';
    echo '</item>';
	
  }
 
?>

  </channel>
</rss>
