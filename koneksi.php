<?php

// $conn = new mysqli("localhost", "root", "root", "sosmed");
$conn = new mysqli("remotemysql.com", "oCSPpndUW6", "m0K4whSwpz", "oCSPpndUW6");

// check connection
if($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}
