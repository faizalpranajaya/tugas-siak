<?php
$url = "http://localhost/sim" ;
$host = "localhost";
$username = "root";
$password = "27marthinz";
$database = "sim";

$connect = mysql_connect($host, $username, $password);
$ea = mysql_select_db($database, $connect) or Die("database not found");
?>