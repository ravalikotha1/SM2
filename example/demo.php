<?php

define('DB_NAME','sakila');
define('DB_USER','root');
define('DB_PASSWORD','db6_appuser');
define('DB_HOST','localhost');

$link=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);

if(!$link){
die('cannot connect:'.mysql_error());
}
$db_selected=mysqli_select_db($link,DB_NAME);

if(!$db_selected){
die('cannot connect:'.mysql_error());
}

echo 'connected to database'
?>