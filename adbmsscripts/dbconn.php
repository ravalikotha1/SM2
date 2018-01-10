<?php

// php select option value from database

$hostname = "projectdb.cq5wbnnwdbg1.us-east-1.rds.amazonaws.com";
$username = "groupusers";
$password = "groupusers_appuser";
$databaseName = "matmgmt";

// connect to mysql database

$connect = mysqli_connect("projectdb.cq5wbnnwdbg1.us-east-1.rds.amazonaws.com", "group6users", "group6users_appuser", "matmgmt");
// mysql select query
$query = "SELECT Description FROM matmgmt.Material;";

// for method 1

$result1 = mysqli_query($connect, $query);
$row=mysqli_fetch_row($result1);
$n=10;
 echo "<select style=\"width:100px;\">";


while ($row = mysqli_fetch_array($result1)) {
echo "<option>".$row[0];
$row[0];
echo "<br>";
}
echo "</option>";
$connect->close();

?>