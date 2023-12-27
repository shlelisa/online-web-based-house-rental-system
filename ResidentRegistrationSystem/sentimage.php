<?php
include('includes/config.php');

if(isset($_POST['send']))
{
$title=mysqli_real_escape_string($con,$_POST['title']);			
	$description =mysqli_real_escape_string($con,$_POST['description']);
	$date=date('Y-m-d');
   
$sPhotoFileName = $_FILES['photo']['name']; // get client side file name
if ($sPhotoFileName) // file uploaded
{   $aFileNameParts = explode(".", $sPhotoFileName);
    $sFileExtension = end($aFileNameParts); // part behind last dot
    if ($sFileExtension != "jpg"
        && $sFileExtension != "JPEG"
        && $sFileExtension != "JPG")
    {   die ("Choose a JPG for the photo");
    }
    $nPhotoSize = $_FILES['photo']['size']; // size of uploaded file
    if ($nPhotoSize == 0)
    {   die ("Sorry. The upload of $sPhotoFileName has failed.
Search a photo smaller than 100K, using the button.");
    }
    if ($nPhotoSize > 10240000000)
    {   die ("Sorry.
The file $sPhotoFileName is larger than 100K.
Advice: reduce the photo using a drawing tool.");
    }
    // read photo
    $sTempFileName = $_FILES['photo']['tmp_name']; // temporary file at server side
    $oTempFile = fopen($sTempFileName, "r");
    $sBinaryPhoto = fread($oTempFile, fileSize($sTempFileName));
    // Try to read image
    $nOldErrorReporting = error_reporting(E_ALL & ~(E_WARNING)); // ingore warnings
    $oSourceImage = imagecreatefromstring($sBinaryPhoto); // try to create image
    error_reporting($nOldErrorReporting);
    if (!$oSourceImage) // error, image is not a valid jpg
    { die ("Sorry.
It was not possible to read photo $sPhotoFileName.
Choose another photo in JPG format.");
    }
}
//Create thumbnail

    $nWidth = imagesx($oSourceImage); // get original source image width
        $nHeight = imagesy($oSourceImage); // and height
        // create small thumbnail
        $nDestinationWidth = 80;
        $nDestinationHeight = 60;
    //$oDestinationImage = imagecreatetruecolor($nDestinationWidth, $nDestinationHeight);
        $oDestinationImage = imagecreate($nDestinationWidth, $nDestinationHeight);
    /*$oResult = imagecopyresampled(
        $oDestinationImage, $oSourceImage,
        0, 0, 0, 0,
        $nDestinationWidth, $nDestinationHeight,
        $nWidth, $nHeight); // resize the image
    */
        imagecopyresized($oDestinationImage, $oSourceImage,0, 0, 0, 0,$nDestinationWidth, $nDestinationHeight,$nWidth, $nHeight); // resize the image
        ob_start(); // Start capturing stdout.
        imageJPEG($oDestinationImage); // As though output to browser.
        $sBinaryThumbnail = ob_get_contents(); // the raw jpeg image data.
        ob_end_clean(); // Dump the stdout so it does not screw other output.
//Store Thumbnail in database

 if($_POST['send'])
    {
    $sBinaryThumbnail = addslashes($sBinaryThumbnail);
    
    mysql_select_db("upload", $con);
    $sQuery =mysqli_query($con,"INSERT INTO  news (title,description,date,image) VALUES ('$title','$description','$date',' $sBinaryThumbnail')");

    echo $sQuery;
    
    }
}
    ?>
	
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>

<form name="dept" method="post" enctype="multipart/form-data">

                        <input type="text" name="title" placeholder="title"required  >
                     
                        <textarea name="description"  required placeholder="description"></textarea>

<input type="file" name="photo" />
<input type="submit" name="send" value="Upload">  
</form>
</body>
</html>