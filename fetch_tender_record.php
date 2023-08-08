<?php
include_once("conn.php");

// fetch records
if ($_REQUEST['action'] == 'example') {
  @$frm_date = $_POST['frm_date'];
  @$to_date = $_POST['to_date'];
  try {
    if (!empty($frm_date) && !empty($to_date)) {
      //echo "select * from tender WHERE publication_date BETWEEN ':$frm_date' AND ':$to_date'"; die;
      $sql = "select * from tender WHERE status='1' AND is_deleted='0' AND publication_date BETWEEN '$frm_date' AND '$to_date'";
    } else {
      $sql = "select id, tender_no, tender_type,title,tender_notice,publication_date,submission_date from tender WHERE status='1' AND is_deleted='0'";
    }
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
      $array[] = $row;
      /*$rows = array();			
		// $rows[] = $record['id'];
		$rows[] = ucfirst($record['tender_no']);
		$rows[] = $record['tender_type'];		
		$rows[] = $record['title'];	
		// $rows[] = $record['tender_notice'];
		$rows[] = $record['publication_date'];					
		$rows[] = $record['submission_date'];					
		$rows[] = '<a href="assets/uploads/"'.$record["tender_notice"].'"" download>Download</a>';
		$records[] = $rows;*/
    }
    // print_r($row);die;
    if (isset($array)) {
      $dataset = array(
        "echo" => 1,
        "totalrecords" => count($array),
        "totaldisplayrecords" => count($array),
        "data" => $array
      );
    } else {
      $dataset = array(
        "echo" => 0,
        "totalrecords" => 0,
        "totaldisplayrecords" => 0,
        "data" => []
      );
    }
    echo json_encode($dataset);
  } catch (Exception $e) {
    echo "Oops! Some unexpected error occured...";
  }
}
