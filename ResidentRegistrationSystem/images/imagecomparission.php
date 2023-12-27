<?php
$s1="s1.jpg";
$s2="s2.jpg";
$image1md5=md5(file_get_contents($s1));
$image2md5=md5(file_get_contents($s2));

if($image1md5==$image2md5){
	echo"images are same please select other one!";
}else{
	
	echo"its diffrent";
}
?>