<?php

	// database_connection.php
	// ---------------------------------------------
	// Contains database connection info and
	// miscellanious database related functions
	// ---------------------------------------------
	
	include_once("quickbase.php");
	

	// Database parameters
	$db_host = "localhost";
	$db_login = "databaseusername";
	$db_password = "YourDataBasePassword";
	$db_database = "databasename";
	
	$db = new Quickbase($db_host, $db_login, $db_password, $db_database);

?>