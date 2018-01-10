<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "db6_appuser", "matmgmt"); 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
else {
echo "Connected";
$name=$_POST['uname'];
$pass=$_POST['psw'];
$result = mysqli_query($link, "SELECT username,password FROM matmgmt.authorization where username='$name';");
$row = mysqli_fetch_array($result);
if($row['username'] && $row['password']==$pass){
echo "Login allowed";
}
else{
echo "Login not allowed";
}
}
$link->close();
?>

