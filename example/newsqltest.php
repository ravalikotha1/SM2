<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:adbmsgroup6.database.windows.net,1433; Database = material-mgmt", "group6users", "appuser.123");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "group6users@adbmsgroup6", "pwd" => "appuser.123", "Database" => "material-mgmt", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:adbmsgroup6.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>
