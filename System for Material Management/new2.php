<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("projectdb.cq5wbnnwdbg1.us-east-1.rds.amazonaws.com", "group6users", "group6users_appuser", "matmgmt"); 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
else {
echo "Connected";
echo "<br>";
$phone=$_POST['phone'];
$psw=$_POST['psw'];
$a="c_";
$b=$a.$phone;
$sql2="INSERT INTO matmgmt.Auth values ('$b','$psw');";
if(mysqli_query($link, $sql2)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql2. " . mysqli_error($link);
}


}
$link->close();
?>