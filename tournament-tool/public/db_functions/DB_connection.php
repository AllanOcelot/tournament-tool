<?php

#Establish a PHP Connection to your hosted server.
#If you need help, please contact your hosting provider for assistence
$servername = "localhost";
$username = "root";
$password = "";

try {
   $conn = new PDO("mysql:host=$servername;dbname=tt_db", $username, $password);
   // set the PDO error mode to exception
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   }catch(PDOException $e){
     echo "Connection failed: " . $e->getMessage();
   }
?>
