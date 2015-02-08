<?php // content="text/plain; charset=utf-8"

require_once ('../jpGraph/src/jpgraph.php');
require_once ('../jpGraph/src/jpgraph_pie.php');
require_once ('../jpGraph/src/jpgraph_pie3d.php');
require_once ('../databaseVariables.php');
session_start();

// Connect to the database
	$dbc = mysqli_connect($DBHOST, $DBUSER, $DBPASSWORD, $DATABASE);

	
	$query = "SELECT feedback FROM studentResponse where feedback = 1 and courseName = '{$_SESSION['course']}' and topicName = '{$_SESSION['topic']}';";

	if ($stmt = mysqli_prepare($dbc, $query)) {

    /* execute query */
    mysqli_stmt_execute($stmt);

    /* store result */
    mysqli_stmt_store_result($stmt);
    $v1 =mysqli_stmt_num_rows($stmt);
    mysqli_stmt_close($stmt);
	}
	
	$query = "SELECT feedback FROM studentResponse where feedback = 2 and courseName = '{$_SESSION['course']}' and topicName = '{$_SESSION['topic']}';";

	if ($stmt = mysqli_prepare($dbc, $query)) {

    /* execute query */
    mysqli_stmt_execute($stmt);

    /* store result */
    mysqli_stmt_store_result($stmt);

    $v2 =mysqli_stmt_num_rows($stmt);
    /* close statement */
    mysqli_stmt_close($stmt);
	}
	
	
	$query = "SELECT feedback FROM studentResponse where feedback = 3 and courseName = '{$_SESSION['course']}' and topicName = '{$_SESSION['topic']}';";

	if ($stmt = mysqli_prepare($dbc, $query)) {

    /* execute query */
    mysqli_stmt_execute($stmt);

    /* store result */
    mysqli_stmt_store_result($stmt);

    $v3 =mysqli_stmt_num_rows($stmt);
    /* close statement */
    mysqli_stmt_close($stmt);
	}
	
	$query = "SELECT feedback FROM studentResponse where feedback = 4 and courseName = '{$_SESSION['course']}' and topicName = '{$_SESSION['topic']}';";

	if ($stmt = mysqli_prepare($dbc, $query)) {

    /* execute query */
    mysqli_stmt_execute($stmt);

    /* store result */
    mysqli_stmt_store_result($stmt);

    $v4 =mysqli_stmt_num_rows($stmt);
    /* close statement */
    mysqli_stmt_close($stmt);
	}
	
	$query = "SELECT feedback FROM studentResponse where feedback = 5 and courseName = '{$_SESSION['course']}' and topicName = '{$_SESSION['topic']}';";

	if ($stmt = mysqli_prepare($dbc, $query)) {

    /* execute query */
    mysqli_stmt_execute($stmt);

    /* store result */
    mysqli_stmt_store_result($stmt);

    $v5 =mysqli_stmt_num_rows($stmt);
    /* close statement */
    mysqli_stmt_close($stmt);
	}
/* close connection */
mysqli_close($dbc);
	
	
	
	
	
	
	
	
	
	
 
$data=array($v1,$v2,$v3,$v4,$v5);
 


//labels
$labels = array("Good\n(%.1f%%)",
                "Unclear\n(%.1f%%)","Confusing\n(%.1f%%)",
                "More\nelaboration\nneeded\n(%.1f%%)","Terrible\n(%.1f%%)");
				
$graph = new PieGraph(500,300);
$graph->SetShadow();
 
$graph->title->Set("Student Responses");
$graph->title->SetFont(FF_FONT1,FS_BOLD);
 
$p1 = new PiePlot3D($data);
$p1->SetAngle(40);
$p1->SetSize(0.5);
$p1->SetCenter(0.5);
$p1->SetLabels($labels);
$p1->SetLabelPos(1);

// Setup the label formats and what value we want to be shown (The absolute)
// or the percentage.
$p1->SetLabelType(PIE_VALUE_PER);
$p1->value->Show();
$p1->value->SetFont(FF_ARIAL,FS_NORMAL,9);
$p1->value->SetColor('darkgray');
 
$graph->Add($p1);
$graph->Stroke();
 
?>