<?php
$server	= "localhost"; 
$user		= "root"; 	
$password	= ""; 	
$database	= "perpustakaan";
$connect = mysql_connect($server, $user, $password, $database) or die ("Tidak bisa terhubung!");
mysql_select_db($database)
?>

