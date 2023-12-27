<?php
session_start();
include('../includes/config.php');

if(strlen($_SESSION['alogin'])==0)
    {   
header('location:index.php');
}else{	
if(isset($_GET['id'])){
 
            $id=$_GET['id']; 
			
           
		
}	
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Front</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<?php
$query=mysqli_query($con," SELECT *FROM registerresident WHERE id='$id'");
$cnt=1;
	while($row=mysqli_fetch_array($query))
{?>
<style>
.bottom-left{
  position: absolute;
  bottom: 235px;
  left: 110px; 
}
.bottom-le{
  position: absolute;
  bottom: 225px;
  left: 190px;
  color: black;
  
}
.bottom-text{
  position: absolute;
  bottom: 210px;
  left: 130px;
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
  bottom: 30px;
  left: 20px;
  color: #0047AB;
}
.bottom-mall{
  position: absolute;
  bottom: 0px;
  left: 20px;
  color: black;
}
.bottom-gad{
  position: absolute;
  bottom: -15px;
  left: 20px;
  
}

.bottom-woreda{
  position: absolute;
  bottom: 181px;
  left: 20px;
  color: black;
}
.bottom-no{
  position: absolute;
  bottom: 150px;
  left: 100px;
  color: black;
}
.bottom-bukke{
  position: absolute;
  bottom: 170px;
  left: 435px;
  color: #ff0000;
}
.bottom-name{
  position: absolute;
  bottom: 130px;
  left: 100px;
  color: black;
}
.bottom-Fname{
  position: absolute;
  bottom: 110px;
  left: 100px;
  color: black;
}
.bottom-dha{
  position: absolute;
  bottom: 83px;
  left: 100px;
  color: black;
}
.bottom-dhii{
  position: absolute;
  bottom: 60px;
  left: 100px;
  color: black;
  font-family: 'Times New Roman', serif;
}
.bottom-gu{
  position: absolute;
  bottom: 36px;
  left: 100px;
  color: black;
}
.bottom-dhumu{
  position: absolute;
  bottom: 12px;
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
<h2 class="bottom-left">የቢሾፍቱ ከተማ ነዋሪ መታወቂያ ካርድ</h2>

<h3 class="bottom-text"> Bishoftu City Resident ID Card </h3><img class="bottom-logo" width="70px" src="Oromia.png" /><p class="bottom-woreda">የምዝገባ ቁ. /Reg.No  &nbsp&nbsp&nbsp&nbsp <?php echo htmlentities($row['regstration_no']); ?></p><?php if($row['image']==""){ ?>
   <img class="bottom-image" width="90px" width="70px" src="../images/noimage.png"><?php } else {?>
   <img class="bottom-image" width="90px" width="70px" src="../images/<?php echo htmlentities($row['image']);?>" >
   <?php } ?>
<p class="bottom-no"> የመታ.ቁ /ID No&nbsp&nbsp&nbsp <?php echo htmlentities($row['id_no']); ?></p>
<p class="bottom-name"> ሙሉ ስም &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </p>
<p class="bottom-Fname"> Full Name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo htmlentities($row['full_name']); ?></p>
<p class="bottom-dha"> የትውልድ ቀን/DOB &nbsp 1988-03-28 &nbsp  <?php echo htmlentities($row['birth_date']); ?></p>
<p class="bottom-dhii">የደም አይነት/Blood Group &nbsp <?php echo htmlentities($row['Blood_Group']); ?> &nbsp&nbsp&nbsp  ጾታ/Sex &nbsp&nbsp  <?php echo htmlentities($row['gender']); ?></p>
<p class="bottom-gu"> የተሰጠበት ቀን/Issue Dt &nbsp የካቲት 26-04-2014 / Mar 19-04-2022</p>
<p class="bottom-dhumu"> ማብቂያ ቀን/Expiry Dt &nbsp ናሃሴ 26-08-2018/ Sep 12-08-2026</p>

<img class="bottom-sig" width="70px" src="sig.png" />

<?php if($row['image']==""){ ?>
   <img class="bottom-bukke" width="60px"  src="../images/noimage.png"><?php } else {?>
   <img class="bottom-bukke" width="60px"  src="../images/<?php echo htmlentities($row['image']);?>" >
   <?php }?>
<h5 class="bottom-mall">ሰጪ አካል</h5>
<h6 class="bottom-gad">Issuing Attority</h6>
<h4 class="bottom-right">
  <div class="content">
 
      </div>

</div>

<!-- partial -->
  
</body>
<?php } } ?>
</html>
