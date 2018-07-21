<?php
include_once('DB_connection.php');


$query = $conn->prepare( "SELECT * FROM teams" );
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);

var_dump($result);

die();
?>
