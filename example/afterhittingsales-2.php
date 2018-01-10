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
echo "<table>";

if ($result->num_rows > 0) {
	echo "<tr><th>ID</th><th>Name</th><th>Qty</th><th>Price</th>";
    // output data of each row
    while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['PRODUCT_ID'] . "</td><td>" . $row['PRODUCT_NAME'] . "</td><td>" . $row["QUANTITY"]. "</td><td>" . $row["PRICE"]. "</td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; 
} 
else {
    echo "0 results";
}
$link->close()
?>


    