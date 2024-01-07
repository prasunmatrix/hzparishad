<?php
  error_reporting(E_ALL);
  ini_set('display_errors', 'On');
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "matrixmedia_db_hzparishad2022";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  date_default_timezone_set('Asia/Calcutta');
  $current_date = date("Y-m-d");
  $t=time();
?>
