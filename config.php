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
define( 'TEMP_PATH' , APP_PATH . 'templates' . DS);
define( "LIB_PATH" , APP_PATH . 'lib' . DS);
define( "MODELS_PATH" , APP_PATH . 'models' . DS);
//DB credentials
define('DB_HOST' , 'localhost');
define('DB_NAME' , 'cafeteria-system');
define('DB_USER' , 'bondok');
define('DB_PASS' , '1234');


//adding autoloading
// require_once('./lib/dbConnection.php');
function __autoload($class){
    require_once( './lib/' . $class . '.php');
}
$dbh = DBConnection::getInstance();

//setting new path
$path =  get_include_path() . PS . LIB_PATH . PS . MODELS_PATH;
set_include_path($path);


// //test db
// $user = new User();
// $user->name = 'Amr';
// $user->email = "bondok@elcoach.com";
// $user->password = md5("1234");
// $user->room = 23;
// $user->ext = 343;
// $user->admin = 0;
// $user->add();



//end buffer and send output
ob_flush();
?>