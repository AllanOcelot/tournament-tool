<?php
/*
   Please ensure you CHANGE these details before deploying
   These are the default connection details to be used with PostgresSQL
   Therfore, every install will have the same and be very easy to 'hack'
   unless changed.
*/

 $username = 'ttool';
 $password = 'ttool';
 $db_name  = 'ttool';
 $host     = 'localhost';


 $db_connection = pg_connect("host=". $host ." dbname=". $db_name ." user=". $username ." password=". $password ."");


?>
