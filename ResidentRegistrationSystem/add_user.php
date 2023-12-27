<?php 
include('../includes/config.php');
$username = mysqli_real_escape_string($con,$_POST['username']);
$password = md5($_POST['password']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$role = mysqli_real_escape_string($con,$_POST['role']);


$query = mysqli_query($con,"INSERT INTO admin (username,password,email,role) values ('$username', '$password', '$email', '$role' )");
$lastId = mysqli_insert_id($con);
if($query ==true)
{
   
    $data = array(
        'status'=>'true',
       
    );

    echo json_encode($data);
}
else
{
     $data = array(
        'status'=>'false',
      
    );

    echo json_encode($data);
} 

?>