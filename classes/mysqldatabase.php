<?php

class mySqlDatabase extends kernel{

	private $_connection;
	private static $_instance; 
	private $_host 		= MYSQL_HOST;
	private $_username 	= MYSQL_USERNAME;
	private $_password 	= MYSQL_PASSWORD;
	private $_database 	= MYSQL_DATABASE;

	/*
	 *Creates and gets an instance
	 *@return Instance
	*/
	public static function getInstance() {
		//creating an instance if there isnt 
		if(!self::$_instance) { 
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	public function __construct() {

		$this->_connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);
	

		if(mysqli_connect_error()) {
			trigger_error(ERROR_ON_MYSQL_CONNECTION . '</br>Additional informations:' . mysqli_connect_error(),
				 E_USER_ERROR);
		}
	}
	
	// Magic method clone is empty to prevent duplication of connection
	private function __clone() { }

	// Get mysqli connection
	public function getConnection() {
		return $this->_connection;
	}
}


//USING THE CLASS

// $db = Database::getInstance();
// $mysqli = $db->getConnection(); 
// $sql_query = "SELECT foo FROM .....";
// $result = $mysqli->query($sql_query);

