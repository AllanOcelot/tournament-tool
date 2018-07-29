<?php

include_once "DB_connection.php";

/* This script returns all data about all teams.
   This script is normally called via an AJAX call, so JS shall parse */

$result = pg_query($db_connection,"SELECT * FROM teams");

echo $result;

?>
