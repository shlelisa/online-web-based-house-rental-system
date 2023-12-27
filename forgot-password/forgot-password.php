<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="forgot-password.php" method="POST" autocomplete="">
				<?php if(isset($_SESSION['variable'])=='email_verification'){ ?>
				 <h2 class="text-center">Email Verification</h2>
				<?php }else{ ?>
                    <h2 class="text-center">Forgot Password</h2>
				<?php } ?>
                    <p class="text-center">Enter your email address</p>
                    <?php
                        if(count($errors) > 0){
                            ?>
                            <div class="alert alert-danger text-center">
                                <?php 
                                    foreach($errors as $error){
                                        echo $error;
                                    }
                                ?>
                            </div>
                            <?php
                        }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="email" autocomplete="off" name="email" placeholder="Enter email address" required value="<?php echo $email ?>">
                    </div>
                    <div style="padding:20px" class="form-group">
                        <input style="margin-left:60px;width:150px;border-radius:5px;background-color:royalblue;color:white;"class="form-control button" type="submit" name="check-email" value="Continue">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>