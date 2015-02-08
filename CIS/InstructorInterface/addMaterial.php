<?php
// Check if a file has been uploaded
require_once('../databaseVariables.php');

if(isset($_FILES['file'])) {
    // Make sure the file was sent without errors
    if($_FILES['file']['error'] == 0) {
        // Connect to the database
        $dbLink = new mysqli($DBHOST, $DBUSER, $DBPASSWORD, $DATABASE);
        if(mysqli_connect_errno()) {
            die("MySQL connection failed: ". mysqli_connect_error());
        }
		session_start();
        // Gather all required data
        $name = $dbLink->real_escape_string($_FILES['file']['name']);
        $mime = $dbLink->real_escape_string($_FILES['file']['type']);
        $data = $dbLink->real_escape_string(file_get_contents($_FILES  ['file']['tmp_name']));
        $size = intval($_FILES['file']['size']);
		$course = $_SESSION['course'];
        // Create the SQL query
        $query = "
            INSERT INTO `file` (
               `courseName`, `name`, `mime`, `size`, `data`, `created`
            )
            VALUES (
                '{$course}', '{$name}', '{$mime}', {$size}, '{$data}', NOW()
            )";
 
        // Execute the query
        $result = $dbLink->query($query);
 
        // Check if it was successfull
        if($result) {
            echo 'Success! Your file was successfully added!';
        }
        else {
            echo 'Error! Failed to insert the file'
               . "<pre>{$dbLink->error}</pre>";
        }
    }
    else {
        echo 'An error accured while the file was being uploaded. '
           . 'Error code: '. intval($_FILES['uploaded_file']['error']);
    }
 
    // Close the mysql connection
    $dbLink->close();
}
else {
    echo 'Error! A file was not sent!';
}
 
// Echo a link back to the main page
echo "<p>Return to <a href='courseHomepage.php'>Homepage</a></p>";
?>
 
 