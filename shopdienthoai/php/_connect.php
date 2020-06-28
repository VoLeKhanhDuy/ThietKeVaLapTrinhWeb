<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "db_webphp";
  
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  if($conn->connect_error) {
    die("Connection failed: " . connect_error);
  }
?>