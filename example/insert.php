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

echo 'connected to database';

$username=$_POST['username'];
echo $username;
$password=$_POST['password'];
$sql="INSERT INTO users ('USER_ID','USERNAME','PASSWORD')values('100','$username','$password')";
if(!$mysqli_query($link,$sql))
{
echo 'Not inserted';
}
else
{
echo '1 record inserted';
}
header("refresh:2;url=D:\Akash\GRE Applications 2016-17\University of South Florida\ASAD\loginpage2.html");
?>