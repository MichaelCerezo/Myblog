<?php 
//--------------------------------------------------------------------------------------------------------------------------------------------
// Classes are used to reuse code multiple times because its an object
//--------------------------------------------------------------------------------------------------------------------------------------------

	class Database {
		private $connectiion;
		private $host;
		private $username;
		private $password;
		private $database;
	
		public function __construct($host, $username, $password, $database){
			$this->host = $host;
			$this->username = $username;
			$this->password = $password;
			$this->database = $database;
		}
//--------------------------------------------------------------------------------------------------------------------------------------------
// Makes the Class Suitable for any Initialization
//--------------------------------------------------------------------------------------------------------------------------------------------

		public function openConnection() {
			
		}

		public function closeConnection() {
			
		}

		public function query($string) {
			
		}
	}
 ?>