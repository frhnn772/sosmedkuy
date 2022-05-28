<?php

$conn = new mysqli("localhost", "root", "root", "sosmed");

// check connection
if($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}