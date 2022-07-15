<?php

$conn = new mysqli("localhost", "root", "", "sosmed");
// $conn = new mysqli("	sql107.epizy.com", "epiz_31832946", "cChjiF17n0iZ", "epiz_31832946_XXX");

// check connection
if($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}