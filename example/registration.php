<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "db6_appuser", "sakila");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$username = $_REQUEST['USERNAME']);
$password = $_REQUEST['PASSWORD']);
 
// attempt insert query execution
$sql = "INSERT INTO users (USERNAME,PASSWORD) VALUES ('$username','$password')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>