<?php

include 'db_connection.php';

$conn=createConnection();

$name=$_POST["name"];
$fname=$_POST["fname"];
$phone=$_POST["phone"];
$cnic=$_POST["cnic"];

if (!$conn) {
    echo mysqli_connect_error();
}else{
    echo "Connection Succesfull <br>";
}

$query="insert into `personal`values(`$name`,`$fname`,`$phone`,`$cnic`)";
 	 	 	 
$result = mysqli_query($conn, $query);

if ($result) {
    echo "Data Added Succesfully";
} else {
    echo mysqli_error($conn);
}

?>