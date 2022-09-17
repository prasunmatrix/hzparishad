<?php
   include_once("conn.php");

// fetch records
$sql = "select * from notice";
$result = mysqli_query($conn, $sql);
//print_r($result); die; 

while($row = mysqli_fetch_assoc($result)) {
    $arr[] = $row;
    
}
//print_r($array);die;
//echo count($arr); die; 
if(isset($arr))
{  
  $dataset = array(
    "echo" => 1,
    "totalrecords" => count($arr),
    "totaldisplayrecords" => count($arr),
    "data" => $arr
);  
}
else
{
  $dataset = array(
    "echo" => 0,
    "totalrecords" => 0,
    "totaldisplayrecords" => 0,
    "data" =>[] 
  );
}
echo json_encode($dataset);
?>