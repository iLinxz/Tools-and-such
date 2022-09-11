<?php
$dbname = 'bssredteam';

if (!mysql_connect('127.0.0.1', 'bssredteam', 'lkasfklasjklfjkl1248712894jlaLJALFASF3213')) {
    echo 'Could not connect to mysql';
    exit;
}

$sql = "SHOW TABLES FROM $dbname";
$result = mysql_query($sql);

if (!$result) {
    echo "DB Error, could not list tables\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;
}

while ($row = mysql_fetch_row($result)) {
    echo "Table: {$row[0]}\n";
}

mysql_free_result($result);
?>
