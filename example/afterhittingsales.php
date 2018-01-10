<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "db6_appuser", "sakila");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
 
// attempt insert query execution
$sql = "select PRODUCT_ID,PRODUCT_NAME,QUANTITY,PRICE from sakila.sales";
$result = $link->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["PRODUCT_ID"]. " - Name: " . $row["PRODUCT_NAME"]. " Quantity -" . $row["QUANTITY"]. "Price -" . $row["PRICE"]. "<br>";
    }
} else {
    echo "0 results";
}
$link->close()
?>