<?php
$con = mysqli_connect("127.0.0.1","bssredteam","lkasfklasjklfjkl1248712894jlaLJALFASF3213","bssredteam");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

// Perform query
if ($result = mysqli_query($con, "SHOW TABLES FROM bssredteam")) {
  echo "Returned rows are: " . mysqli_num_rows($result);
  // Free result set
  mysqli_free_result($result);
}

$tables = $this->con->list_tables();
foreach ($tables as $table)
{
  echo $table;
}

mysqli_close($con);
?>
