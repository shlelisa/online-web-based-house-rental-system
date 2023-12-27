<?php
$con = mysqli_connect("localhost", "root", "", "resident_registration") or die($con);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>