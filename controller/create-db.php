<?php 
//------------------------------------------------------------------------------------------------
//Checks for Error in Connection
//------------------------------------------------------------------------------------------------

	require_once(__DIR__ . "/../model/database.php");
	$connection = new mysqli($host, $username, $password);
	if ($connection->connect_error) {
		die("Error: " . $connection->connect_error);
	}
//------------------------------------------------------------------------------------------------
//New Database File in Localhost
//------------------------------------------------------------------------------------------------
	
	$exists = $connection ->select_db($database);

	if(!$exists){
		$query = $connection->query("CREATE DATABASE $database");

		if ($query) {
			echo "successfully created database" . $database;
		}
		else{
			echo "DATABASE already created";
		}
	}

	$connection->close();
 ?>