<?php

function createConnection()
{
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbName = "person";
    $conn = mysqli_connect($host, $username, $password, $dbName);
    return $conn;
}

?>