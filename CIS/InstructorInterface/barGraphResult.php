<?php // content="text/plain; charset=utf-8"
// $Id: horizbarex4.php,v 1.4 2002/11/17 23:59:27 aditus Exp $
require_once ('../jpGraph/src/jpgraph.php');
require_once ('../jpGraph/src/jpgraph_bar.php');
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
	
	
	
	
	
	
	
	
	
	
 
$datay=array($v1,$v2,$v3,$v4,$v5);
 
// Size of graph
$width=400;
$height=370;
 
// Set the basic parameters of the graph
$graph = new Graph($width,$height);
$graph->SetScale('textlin');
 
$top = 60;
$bottom = 40;
$left = 80;
$right = 30;
$graph->Set90AndMargin($left,$right,$top,$bottom);
 
// Nice shadow
$graph->SetShadow();
 
// Setup labels
$lbl = array("Good","Unclear","Confusing","More\nelaboration\nneeded",
"Terrible");
$graph->xaxis->SetTickLabels($lbl);
 
// Label align for X-axis
$graph->xaxis->SetLabelAlign('right','center','right');
 
// Label align for Y-axis
$graph->yaxis->SetLabelAlign('center','bottom');
 
// Titles
$graph->title->Set('Student Responses');
 
// Create a bar pot
$bplot = new BarPlot($datay);
$bplot->SetFillColor('red');
$bplot->SetWidth(0.5);
$bplot->SetYMin(0);
 
$graph->Add($bplot);
 
$graph->Stroke();
?>