<?php
session_start();
include('../includes/config.php');

if(strlen($_SESSION['alogin'])==0)
    {   
header('location:index.php');
}else{	
	
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Back</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<?php
$query=mysqli_query($con," SELECT * FROM registerresident WHERE payment=0 and id='".$_GET['id']."'");
$cnt=1;
	while($row=mysqli_fetch_array($query))
{?>
<style>
.bottom-left{
  position: absolute;
  bottom: 245px;
  left: 20px;
  color: black;
  
}
.bottom-barcode{
  position: absolute;
  bottom: 230px;
  left: 250px;
  color: black;
  
}
.bottom-le{
  position: absolute;
  bottom: 225px;
  left: 20px;
  color: black;
  
}
.bottom-text{
  position: absolute;
  bottom: 225px;
  left: 20px;
  color: black;
}
.bottom-logo{
  position: absolute;
  bottom: 225px;
  left: 20px;
  color: #0047AB;
}
.bottom-image{
  position: absolute;
  bottom: 80px;
  left: 7px;
  color: #0047AB;
}
.bottom-sig{
  position: absolute;
  bottom: 15px;
  left: 20px;
  color: #0047AB;
}
.bottom-mall{
  position: absolute;
  bottom: 0px;
  left: 20px;
  color: #0047AB;
}

.bottom-woreda{
  position: absolute;
  bottom: 190px;
  left: 20px;
  color: black;
}
.bottom-no{
  position: absolute;
  bottom: 165px;
  left: 20px;
  color: black;
}
.bottom-bukke{
  position: absolute;
  bottom: 160px;
  left: 435px;
  color: #ff0000;
}
.bottom-name{
  position: absolute;
  bottom: 140px;
  left: 20px;
  color: black;
}
.bottom-Fname{
  position: absolute;
  bottom: 95px;
  left: 20px;
  color: black;
}
.bottom-dha{
  position: absolute;
  bottom: 87px;
  left: 100px;
  color: black;
}
.bottom-dhii{
  position: absolute;
  bottom: 65px;
  left: 100px;
  color: black;
  font-family: 'Times New Roman', serif;
}
.bottom-gu{
  position: absolute;
  bottom: 115px;
  left: 20px;
  color: black;
}
.bottom-dhumu{
  position: absolute;
  bottom: 25px;
  left: 100px;
  color: black;

}
.bottom-right {
  position: absolute;
  bottom: 40px;
  right: 25px;
  color:black;
  color: #0047AB;
  
  
}

.Bottom-right {
  
  margin-bottom: 0px;
  margin-right: 3%;
  margin-top: -25%;
  margin-left: 80%;

}
.center,h4 {
  font-family: "Times New Roman", Times, serif;
  color: black;
}
body {
  font-family: "Trirong", serif;
  color: #1A1110;
}
</style>
<!-- partial:index.partial.html -->
<div class="container">
<p class="bottom-left"><b>Teessoo Jiraataa&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo htmlentities($row['address_of_resident']); ?>&nbsp&nbsp&nbsp&nbsp&nbsp </h3>

<p class="bottom-text">የመኖሪያ አድራሻ &nbsp&nbsp&nbsp&nbsp&nbspቀበሌ &nbsp <?php echo htmlentities($row['kebele']); ?></b></p><p class="bottom-woreda"><b>Bilbila /</b>ስልክ ቁ. </b>&nbsp <b><?php echo htmlentities($row['phone']); ?></b><b>&nbsp&nbsp&nbspLakk. Mana/</b> የቤት ቁጥር <b><?php echo htmlentities($row['house_number']); ?></b></p>
<p class="bottom-no"> <b>Wammama Yeroo rakko</b>/ በችግር ግዜ ተጠሪ&nbsp  </b><?php echo htmlentities($row['ecp']); ?></p>
<p class="bottom-name"> <b>Maqaa </b> &nbsp&nbsp&nbsp <b> <?php echo htmlentities($row['mother_name']); ?></b> </p>
<p class="bottom-gu"> ስም &nbsp&nbsp ግሳ በርሲሳ ጉታታ</p>
<p class="bottom-Fname"> <b>Lakk. Bilbila /</b>ስልክ ቁ. &nbsp&nbsp&nbsp <b> <?php echo htmlentities($row['ephone']); ?></b></p>

<img class="bottom-sig" width="430px" height="70px" src="barcode.png" />
<img class="bottom-barcode" width="220px" height="50px" src="barcode.jpg" />

<h4 class="bottom-right">
  <div class="content">
 
      </div>

</div>
<!-- partial -->
  
</body>
</html>
<?php } } ?>