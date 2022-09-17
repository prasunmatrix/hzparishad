<?php
   include_once("conn.php");

// fetch records
$sql = "select id, tender_no, tender_type,title,tender_notice,publication_date,submission_date from tender";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)) {
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
$dataset = array(
    "echo" => 1,
    "totalrecords" => count($array),
    "totaldisplayrecords" => count($array),
    "data" => $array
);

echo json_encode($dataset);
?>