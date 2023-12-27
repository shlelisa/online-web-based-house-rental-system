<?php
session_start();
include('includes/config.php');

if(strlen($_SESSION['id'])==0)
    {   
header('location:index.php');
}
else{

$id=$_GET['eid'];

$ret=mysqli_query($con,"update admin set status=0 where id='$id'");
if($ret)
{
header('location: datatable.php');
}
else
{
  $_SESSION['msg']="Error : Not sumbmitted!";
}
header('location: datatable.php');
}
?>