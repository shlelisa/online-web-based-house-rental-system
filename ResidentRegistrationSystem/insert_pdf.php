<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Insert PDF</title>
    <style media="screen">
      div{
        border: 2px solid black;
        width: 500px;
        margin-left: 370px;
        margin-top: 50px;
        padding: 30px;
      }
      form{
        margin-left: 70px;
      }
      label{
        font-size: 25px;
        font-weight: bold;
      }
      #pdf{
        font-size: 20px;
        font-weight: bold;
        margin-top: 10px;
      }
      #upload{
        font-size: 20px;
        font-weight: bold;
        margin-left: 100px;
      }
    </style>
  </head>
  <body>
    <div class="">
      <form class="" method="post" enctype="multipart/form-data">
        <label for="">Choose Your PDF File</label><br>
        <input id="pdf" type="file" name="pdf" value="" required><br><br>
        <input id="upload" type="submit" name="submit" value="Upload">
        <?php
        include ('includes/config.php');
           $msg="";
        if (isset($_POST['submit'])) {
          $pdf=$_FILES['pdf']['name'];
          $pdf_type=$_FILES['pdf']['type'];
          $pdf_size=$_FILES['pdf']['size'];
          $pdf_tem_loc=$_FILES['pdf']['tmp_name'];
          $pdf_store="pdf/".$pdf;
          $error = $_FILES['pdf']['error'];

	if ($error === 0) {
		if ($pdf_size > 125000) {
			$msg="Sorry";
		   
		}else{
		
         /* move_uploaded_file($pdf_tem_loc,$pdf_store);*/
move_uploaded_file($_FILES["pdf"]["tmp_name"],"pdf/".$_FILES["pdf"]["name"]);
          $sql=mysqli_query($con,"INSERT INTO shegni(yourevidenc) values('$pdf')");
         if($sql){
			 
			 echo"inserted";
		 }else{
			 
			 echo"not".mysqli_error($sql);
		 }
	}


        }

}

         ?>
<span><?php echo $msg; ?></span>
      </form>

    </div>

  </body>
</html>