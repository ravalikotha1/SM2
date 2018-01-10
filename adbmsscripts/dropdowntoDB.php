<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("projectdb.cq5wbnnwdbg1.us-east-1.rds.amazonaws.com", "group6users", "group6users_appuser", "matmgmt"); 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
else {
//echo "Connected";
echo "<br>";
$sql1="select Description from matmgmt.Material;";
$result=mysqli_query($link,$sql1);
$row=mysqli_fetch_row($result);
while ($row = mysqli_fetch_array($result)) {
 echo $row[0];
}

}

$link->close();
?>

