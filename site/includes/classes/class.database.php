<?php

/**
 * MySQLi database; only one connection is allowed. 
 */
class Database {
  private $_connection;
  
  // Store the single instance.
  private static $_instance;
  private static  $_last_query;


  /**
   * Get an instance of the Database.
   * @return Database 
   */
  public static function getInstance() {
    if (!self::$_instance) {
      self::$_instance = new self();
    }
    return self::$_instance;
  }
  
  /**
   * Constructor 
   */
  public function __construct() {
    //$this->_connection = new mysqli("localhost", "todidea_user", "password@123", "todidea_db");
    $this->_connection = new mysqli("localhost", "root", "beatrice@60", "todidea_db");
    // Error handling.
    if (mysqli_connect_error()) {
      trigger_error('Failed to connect to MySQL: ' . mysqli_connect_error(), E_USER_ERROR);
    }
  }
  
  /**
   * Empty clone magic method to prevent duplication. 
   */
  private function __clone() {}
  
  /**
   * Get the mysqli connection. 
   */
  public function getConnection() {
    return $this->_connection;
  }
  
  
  public static function prepData($data)
  {
  	$db = self::getInstance();
  	$mysqli = $db->getConnection();
  	$data = $mysqli->real_escape_string($data);
  	$data = addslashes($data);  	
  	return $data;
  }

  
  public static function performQuery($sql) {
  	$db = self::getInstance();
  	$mysqli = $db->getConnection();
  	self::$_last_query = $sql;
  	$result = $mysqli->query($sql);
  	self::confirm_query($result);
  	return $result;
  }
  
  
  public static function confirm_query($result) {
  	if (!$result) {
  	echo "Ooops. Something has gone terribly wrong. Internal server problem.<br />";
  	echo "Last SQL query:<br /><pre> " . self::$_last_query."</pre<br />";
  	echo $result->error();
  	}
}
}


//Create new Database object and store it in $db
$database = Database::getInstance();
$database = $database->getConnection();
$db =&$database;

