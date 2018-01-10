<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "db6_appuser", "sakila");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
 
// attempt insert query execution
$sql = "select ITEM_NAME,QUANTITY from sakila.pizza_inventory 
where item_name='BELL PEPPER'";
$result = $link->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " Name: " . $row["ITEM_NAME"]. " Quantity -" . $row["QUANTITY"]. "<br>";
    }
} else {
    echo "0 results";
}
$link->close()
?>