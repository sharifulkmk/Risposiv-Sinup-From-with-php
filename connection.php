<?php

	// Server Deatailes
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";

	// Server databaise Deatailes
	$dbname = "signin_sigup_from";
    $tabail = 'user_data';

	// Databag table Deatailes
	$tb1 = 'id';
	$tb2 = 'Username';
	$tb3 = 'Email';
	$tb4 = 'Password';

	// Server Connation
	if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
	{

		die("failed to connect!");
	}

?>
