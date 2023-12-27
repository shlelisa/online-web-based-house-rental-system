<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>
 
<form  method="post" enctype="multipart/form-data">

<input type="file" name="file" size="50" />

<br />

<input type="submit" name="submit" value="Upload" />

</form>
 
 <?php
if(isset($_GET['submit'])){
	
	 $targetfolder = "pdf/";

 $targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;

if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))

 {

 echo "The file ". basename( $_FILES['file']['name']). " is uploaded";

 }

 else {

 echo "Problem uploading file";

 }

}

 ?>
 <?php
if(isset($_POST['submit'])){
 $targetfolder = "pdf/";

 $targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;

 $ok=1;

$file_type=$_FILES['file']['type'];

if ($file_type=="application/pdf" || $file_type=="image/gif" || $file_type=="image/jpeg") {

 if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))

 {

 echo "The file ". basename( $_FILES['file']['name']). " is uploaded";

 }

 else {

 echo "Problem uploading file";

 }

}

else {

 echo "You may only upload PDFs, JPEGs or GIF files.<br>";

}
}
?>


</body>
</html>