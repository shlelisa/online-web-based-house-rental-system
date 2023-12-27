<?php

$serverName="localhost";
$userName="root";
$password="";
$dbName="house_rental";

$conn=mysqli_connect($serverName,$userName,$password,$dbName);

if($conn){
	
}else{
	die("connection failed".mysqli_connect_error());
}

?>