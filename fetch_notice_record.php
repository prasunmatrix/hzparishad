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
if(count($arr)>0)
{  
  $dataset = array(
    "echo" => 1,
    "totalrecords" => count($array),
    "totaldisplayrecords" => count($array),
    "data" => $arr
);  
}
else
{
  $dataset = array(
    "echo" => 0,
    "totalrecords" => count($array),
    "totaldisplayrecords" => count($array),
    "data" =>'null' 
  );
}
echo json_encode($dataset);
?>