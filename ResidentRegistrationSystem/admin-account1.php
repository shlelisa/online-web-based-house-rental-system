<?php
session_start();
include('includes/config.php');

if(strlen($_SESSION['id'])==0)
    {   
header('location:index.php');
}
else{

$id=$_GET['uid'];

$ret=mysqli_query($con,"update registerresident set status=1 where id='$id'");
if($ret)
{
header('location: residentinformation.php');
}
else
{
  $_SESSION['msg']="Error : Not sumbmitted!";
}
header('location: residentinformation.php');
}
?>