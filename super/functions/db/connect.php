<?php
// PRODUCTION
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'ismaticc_admin');
define('DB_PASSWORD', 'w&HXs(ZTeq}r');
define('DB_CHARSET', 'utf8');
define('DB_NAME', 'ismaticc_website');
// test
// DEV
// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'bfslcom_apply');
// define('DB_PASSWORD', 'Apply633#@');
// define('DB_CHARSET', 'utf8');
// define('DB_NAME', 'ismaticc_website');

$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$connection){
	echo "Failed to connect database" . die(mysqli_error($connection));;
}
$dbselect = mysqli_select_db($connection, DB_NAME);
if(!$dbselect){
	echo "Failed to Select database" . die(mysqli_error($connection));
}
?>