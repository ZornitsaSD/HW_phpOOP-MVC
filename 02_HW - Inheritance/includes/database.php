<?php 
//Database Connection Constants

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','school_db');

class Database 
{
	public $connection;

	/*
	* for automatic database connectiom 
	*/
	
	public function __construct() {

		$this->open_db_connection();
	}


	public function open_db_connection(){

		//$this->connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		$this->connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

		if ($this->connection->connect_errno){ 

			die("Database connection failed badly" . mysqli_error());


		}

	}

	public function query($sql) {

		$result = mysqli_query($this->connection, $sql);

		return $result;

	}

	private function confirm_query($result) {

		if(!$result) {

			die("Query failed");

			}
	}

	public function escape_string($string) {

		$escaped_string = mysqli_real_escape_string($this->connectiom, $string);

		return $escaped_string;


	}
	
}



$database = new Database();
