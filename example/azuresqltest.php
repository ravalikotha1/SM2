<?php
$server = "adbmsgroup6.database.windows.net,1433";
$username = "group6users@adbmsgroup6";
$password = "appuser.123";
$database = "material-mgmt";
try
{
    $conn = new PDO("sqlsrv:server=$server ; Database = $database", $username, $password);
}
catch(Exception $e)
{
    die(print_r($e));
}
?>

