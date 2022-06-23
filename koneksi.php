<?php

// $conn = new mysqli("localhost", "root", "root", "sosmed");
$conn = new mysqli("remotemysql.com", "oCSPpndUW6", "ua42CT7gNm", "oCSPpndUW6");

// check connection
if($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}
