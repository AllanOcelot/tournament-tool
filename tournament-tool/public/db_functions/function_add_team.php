<?php
## Simple function that will fetch all teams in the user's saved DB.

include_once('DB_connection.php');

$result = $PDOConnection->query("SELECT * FROM teams");

echo $result;
die();
?>
