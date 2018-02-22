<?php
/**
 * Created by PhpStorm.
 * User: 13554
 * Date: 22.02.2018
 * Time: 15:14
 */

namespace app\lib;


use app\lib\base\DB;

class mysqli implements DB
{
    public function __construct()
    {
        self::connect();
    }

    private $_connection;
	private static $_instance; //The single instance
	private $_host = "HOSTt";
	private $_username = "USERNAME";
	private $_password = "PASSWORd";
	private $_database = "DATABASE";
	/*
	Get an instance of the Database
	@return Instance
	*/
	public static function getInstance() {
		if(!self::$_instance) { // If no instance then make one
			self::$_instance = new self();
		}
		return self::$_instance;
	}
	// Constructor
	private function __construct() {
		self::connect();	
	}
	
	
	public static function connect()
    {
       $this->_connection = new mysqli($this->_host, $this->_username, 
			$this->_password, $this->_database);
	
		// Error handling
		if(mysqli_connect_error()) {
			trigger_error("Failed to conencto to MySQL: " . mysql_connect_error(),
				 E_USER_ERROR);
		}
    }
	
	// Magic method clone is empty to prevent duplication of connection
	private function __clone() { }
	// Get mysqli connection
	public function getConnection() {
		return $this->_connection;
	}

    public static function disconnect()
    {
        echo ' dis connect using mysqli';
    }

}