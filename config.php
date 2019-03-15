<?php
//setting the output buffer
ob_start();

//error handling
ini_set('display_errors' , 1);
error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT);

//turn off register globals
ini_set('register_globals' , 0);

//define app constants

//Shortcuts
define('DS' , DIRECTORY_SEPARATOR);
define('PS' , PATH_SEPARATOR);
//domaine related constants
define( 'HOST_NAME' , 'https://' .  $_SERVER['HTTP_HOST'] . '/');
//paths
define('APP_PATH' , realpath(dirname(__FILE__)) . DS );
define( 'TEMPLATE_PATH' , APP_PATH . 'templates' . DS);
define( "LIB_PATH" , APP_PATH . 'lib' . DS);
define( "MODELS_PATH" , APP_PATH . 'models' . DS);
define( "VIEWS_PATH" , APP_PATH . 'views' . DS);
//DB credentials
define('DB_HOST' , '127.0.0.1');
define('DB_NAME' , 'cafeteria_system');
define('DB_USER' , 'root');
define('DB_PASS' , '');

//setting new path
$path =  get_include_path() . PS . LIB_PATH . PS . MODELS_PATH;
set_include_path($path);

//adding autoloading
// require_once('./lib/dbConnection.php');
function __autoload($class){
    require_once($class . '.php');
}

$dbh = DBConnection::getInstance();



//end buffer and send output
ob_flush();
?>