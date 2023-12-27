
<?php 
include("includes/config.php");
$un="efrem";
$select=mysqli_query($con,"SELECT *FROM registerresident where username='$un'");
while($row=mysqli_fetch_array($select)){
$dateOfBirth =$row['birth_date'];
}
$today = date("Y-m-d");
$diff = date_diff(date_create($dateOfBirth), date_create($today));
echo 'Age is '.$diff->format('%y');
?>

include("includes/config.php");
$un="abdi";

$select=mysqli_query($con,"SELECT *FROM registerresident where username='$un'");
while($row=mysqli_fetch_array($select)){
	
	$id=date_create($row['issued_date']);
	$eed=date_create($row['expir_date']);
	
	$ed=date_add($eed,date_interval_create_from_date_string("2 years"));
	
echo date_format($ed,"Y-m-d");}