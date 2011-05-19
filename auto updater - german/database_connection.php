<?php

	// database_connection.php
	// ---------------------------------------------
	// Contains database connection info and
	// miscellanious database related functions
	// ---------------------------------------------
	
	include_once("quickbase.php");
	

	// Database parameters
	$db_host = "localhost";
	$db_login = "web123451";
	$db_password = "hJ4ydvJp";
	$db_database = "usr_web123451_2";
	
	$db = new Quickbase($db_host, $db_login, $db_password, $db_database);

?>