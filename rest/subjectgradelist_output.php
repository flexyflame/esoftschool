<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/mysql_data.php");
    require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/functions.php");

    //header('Content-type: text/xml; charset=UTF-8');
    header('Content-Type: application/json');
	header('Cache-Control: no-cache');
	header('Cache-Control: no-store' , false);	


 //echo "<script>alert('nooo');</script>";
	
    $text_subjectgrade_id = "";
    if (isset($_REQUEST['subjectgrade_id'])) { $text_subjectgrade_id = $_REQUEST['subjectgrade_id']; }

    //echo $pkey;

   
	$query_result_array = array();    
	$dbconn = DB_Connect_Direct();

	$query = "SELECT * FROM subjectgrade WHERE SubjectgradeID= '" . $text_subjectgrade_id . "';";
	//echo $query;

	$result = DB_Query($dbconn, $query);

	if ($result != false) {
		
	  while ($obj = DB_FetchObject($result)) { //Build Array from result
	      $query_result_array[] = $obj;
	  } // end while ($obj = DB_FetchObject($result));
	}

	echo json_encode($query_result_array);

	DB_FreeResult($result);
	DB_Close($dbconn);

?>