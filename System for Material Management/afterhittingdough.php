<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "db6_appuser", "matmgmt"); 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
else {
$name=$_POST['uname'];
$pass=$_POST['psw'];
// attempt validation
$sql ="select username from matmgmt.authorization";
$result = $link->query($sql);
$row = mysqli_fetch_array($result);
echo $row['username'];

$link->close();
?>
