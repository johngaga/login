<?php
$serverName = "localhost";
$dbUser = "root";
$dbPassword = '';
$dbName = "try";

$conndb = mysqli_connect($serverName, $dbUser, $dbPassword, $dbName);

if(!$conndb){
    die("connection failed: ".mysqli_connect_error());   
}

?>