<?php
	$server = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'pecunia';
	
	$connection = mysql_connect($server, $user, $pass) 
	or die ("Kan geen verbinding maken met de server... \n" . mysql_error ());

	mysql_select_db($db)
	or die ("Kan geen verbinding maken met de database... \n" . mysql_error ());	
?>
