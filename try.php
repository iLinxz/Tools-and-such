<?php
$mysqli = new mysqli("127.0.0.1","bssredteam","lkasfklasjklfjkl1248712894jlaLJALFASF3213","bssredteam");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

// Perform query
if ($result = $mysqli -> query("show tables;")) {
  echo "Returned rows are: " . $result -> num_rows;
  // Free result set
  $result -> free_result();
}

$mysqli -> close();
?>
