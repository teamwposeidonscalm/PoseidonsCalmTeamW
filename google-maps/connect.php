<?php

$hostname="localhost";
$username="root";
$password="";
$dbname="list_markers";

 
//Connect to the database
$connection = mysql_connect($hostname, $username, $password);
mysql_select_db($dbname, $connection) or die ("Not connected to databse");
 
?>