<?php
//Define Timezone 
date_default_timezone_set('Africa/Kampala');

// Define the core paths
// Define them as absolute paths to make sure that require_once works as expect
define('BASE',"http://" . $_SERVER['HTTP_HOST']);

// DIRECTORY_SEPARATOR is a PHP pre-defined constant
define('DS', '/');

// Site root
define('BASE_URL', BASE.DS.'ToD/site');

// load basic functions next so that everything after can use them
require_once('.'.DS.'includes'.DS.'functions.php');

//load core objects using dynamic links
require_once('.'.DS.'includes'.DS.'classes'.DS.'class.session.php');
require_once('.'.DS.'includes'.DS.'classes'.DS.'class.database.php');
require_once('.'.DS.'includes'.DS.'classes'.DS.'class.Pagination.php');
require_once('.'.DS.'includes'.DS.'classes'.DS.'class.ImageManipulator.php');
require_once('.'.DS.'includes'.DS.'classes'.DS.'class.template.php');
require_once('.'.DS.'includes'.DS.'classes'.DS.'class.pagecontent.php');
require_once('.'.DS.'includes'.DS.'classes'.DS.'class.Blog.php');
require_once('.'.DS.'includes'.DS.'classes'.DS.'class.Event.php');
require_once('.'.DS.'includes'.DS.'classes'.DS.'class.Jobs.php');

// load database-related classes using dynamic links
require_once('.'.DS.'includes'.DS.'classes'.DS.'class.user.php');



?>