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
// Implements openConnection Function
//--------------------------------------------------------------------------------------------------------------------------------------------

		public function openConnection() {
			$this->connectiion = new mysqli($this->host, $this->username, $this->password, $this->database)
//--------------------------------------------------------------------------------------------------------------------------------------------
// Implements closeConnection Function
//--------------------------------------------------------------------------------------------------------------------------------------------
		
			if ($is->connection->connect_error) {
				die("<p>Error: " . $this->connection->connect_error . "</p>");
			}
		}

		public function closeConnection() {
			if(isset($this->connection)) {
				$this->connection->close();
			}
		}

		public function query($string) {
			
		}
	}
 ?>