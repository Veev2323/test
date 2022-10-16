<?php
/********************************************************
*  Settings file
*
*  https://coderlog.top
*  https://youtube.com/CoderLog
********************************************************/
$api = '5755647903:AAE2XrbcFxDcTvH1907mmsFR6YmMF-jWB5o';
define('MYSQL_SERVER', '5.75.155.214:3306');
define('MYSQL_USER', 'admin_user');
define('MYSQL_PASSWORD', 'w1SdJsJPpX');
define('MYSQL_DB', 'admin_tg');


function db_connect(){
	$connect = mysqli_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB)
		or die("Error: ".mysqli_error($connect));
	if(!mysqli_set_charset($connect, "utf8mb4")){
		print("Error: ".mysqli_error($connect));
	}
	return $connect;
}

$connect = db_connect();

?>