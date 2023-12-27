<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Display PDF</title>
    <style media="screen">
      embed{
        border: 2px solid black;
        margin-top: 30px;
      }
      .div1{
        margin-left: 170px;
      }
    </style>
  </head>
  <body>
    <div class="div1">
      <?php
      include ('includes/config.php');

      $sql=mysqli_query($con,"SELECT yourevidenc from shegni");
     
      while ($info=mysqli_fetch_array($sql)) {
        ?>
      <embed type="application/pdf" src="pdf/<?php echo $info['yourevidenc'] ; ?>" width="900" height="500">
    <?php
      }

      ?>

    </div>

  </body>
</html>