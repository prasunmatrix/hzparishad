<?php
include_once("conn.php");

// fetch records
if ($_REQUEST['action'] == 'example') {
  @$frm_date = $_REQUEST['frm_date'];
  @$to_date = $_REQUEST['to_date'];
  if(!empty($frm_date) && !empty($to_date)){
    $frm_date=$frm_date.' 00:00:01';
    $to_date=$to_date.' 23:59:59';
    //echo "select * from notice WHERE created_at BETWEEN '$frm_date' AND '$to_date'"; die;
    $sql = "select * from notice WHERE created_at BETWEEN '$frm_date' AND '$to_date'";
  }
  else
  {
    $sql = "select * from notice";
  }
  $result = mysqli_query($conn, $sql);
  //print_r($result); die; 

  while ($row = mysqli_fetch_assoc($result)) {
    $arr[] = $row;
  }
  //print_r($array);die;
  //echo count($arr); die; 
  if (isset($arr)) {
    $dataset = array(
      "echo" => 1,
      "totalrecords" => count($arr),
      "totaldisplayrecords" => count($arr),
      "data" => $arr
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
}
?>
