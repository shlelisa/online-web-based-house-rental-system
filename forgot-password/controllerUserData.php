<?php 
session_start();
include('../connection.php');
$email = "";
$name = "";
$errors = array();

    //if user click verification code submit button
    if(isset($_POST['check'])){
        $_SESSION['info'] = "";
        $otp_code = mysqli_real_escape_string($conn, $_POST['otp']);
        $check_code = "SELECT * FROM new_user WHERE code = $otp_code";
        $code_res = mysqli_query($conn, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $fetch_code = $fetch_data['code'];
            $email = $fetch_data['email'];
            $code = 0;
            $status = 'verified';
            $update_otp = "UPDATE new_user SET code = $code, status = '$status' WHERE code = $fetch_code";
            $update_res = mysqli_query($conn, $update_otp);
            if($update_res){
                $_SESSION['name'] = $name;
                $_SESSION['email'] = $email;
                header('location: home.php');
                exit();
            }else{
                $errors['otp-error'] = "Failed while updating code!";
            }
        }else{
            $errors['otp-error'] = "You've entered incorrect code!";
        }
    }

    

    //if user click continue button in forgot password form
    if(isset($_POST['check-email'])){
		if(isset($_SESSION['variable'])=='email_verification'){
		$email = mysqli_real_escape_string($conn, $_POST['email']);
        $check_email = "SELECT * FROM new_user WHERE email='$email'";
        $run_sql = mysqli_query($conn, $check_email);
        if(mysqli_num_rows($run_sql) > 0){
            $code = rand(999999, 111111);
            $insert_code = "UPDATE new_user SET code = $code WHERE email = '$email'";
            $run_query =  mysqli_query($conn, $insert_code);
            if($run_query){
                $subject = "Email Verification Code";
                $message = "Your Email Verification code is $code";
                $sender = "From: oromobiblestudy@yahoo.com";
                if(mail($email, $subject, $message, $sender)){
                    $info = "We've sent a Email Verification code to your email - $email";
                    $_SESSION['info'] = $info;
                    $_SESSION['email'] = $email;
                    header('location: reset-code.php?variable=email_verification');
                    exit();
                }else{
                    $errors['otp-error'] = "Failed while sending code!";
                }
            }else{
                $errors['db-error'] = "Something went wrong!";
            }
        }else{
            $errors['email'] = "This email address does not exist!";
        }
			 
			 
		}else{
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $check_email = "SELECT * FROM new_user WHERE email='$email'";
        $run_sql = mysqli_query($conn, $check_email);
        if(mysqli_num_rows($run_sql) > 0){
            $code = rand(999999, 111111);
            $insert_code = "UPDATE new_user SET code = $code WHERE email = '$email'";
            $run_query =  mysqli_query($conn, $insert_code);
            if($run_query){
                $subject = "Password Reset Code";
                $message = "Your password reset code is $code";
                $sender = "From: oromobiblestudy@yahoo.com";
                if(mail($email, $subject, $message, $sender)){
                    $info = "We've sent a passwrod reset otp to your email - $email";
                    $_SESSION['info'] = $info;
                    $_SESSION['email'] = $email;
                    header('location: reset-code.php');
                    exit();
                }else{
                    $errors['otp-error'] = "Failed while sending code!";
                }
            }else{
                $errors['db-error'] = "Something went wrong!";
            }
        }else{
            $errors['email'] = "This email address does not exist!";
        }
		
	 }
		
    }

    //if user click check reset otp button
    if(isset($_POST['check-reset-otp'])){
        
		if(isset($_SESSION['variable'])=='email_verification'){
	   
        $otp_code = mysqli_real_escape_string($conn, $_POST['otp']);
        $check_code = "SELECT * FROM new_user WHERE code = $otp_code limit 1";
        $code_res = mysqli_query($conn, $check_code);
        if(mysqli_num_rows($code_res) > 0){
			
        $check_code = "SELECT * FROM new_user WHERE code = $otp_code";
        $code_re= mysqli_query($conn, $check_code);
		$data=mysqli_fetch_array($code_re);
		$email=$data['email'];
            $update_code = "UPDATE new_user SET code = '0',status = 'verified' WHERE email = '$email'";
            $run_query = mysqli_query($conn, $update_code);
            if($run_query){
                $info = "Your Email Verified. Now you can login with your password and username.";
                $_SESSION['info'] = $info;
                header('Location:../login.php');
            }else{
                $errors['db-error'] = "Failed to change your password!";
            }
       
	   }else{
            $errors['otp-error'] = "You've entered incorrect code!";
        }
		}else{

	    $_SESSION['info'] = "";
        $otp_code = mysqli_real_escape_string($conn, $_POST['otp']);
        $check_code = "SELECT * FROM new_user WHERE code = $otp_code";
        $code_res = mysqli_query($conn, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $email = $fetch_data['email'];
            $_SESSION['email'] = $email;
            $info = "Please create a new password that you don't use on any other site.";
            $_SESSION['info'] = $info;
            header('location: new-password.php');
            exit();
        }else{
            $errors['otp-error'] = "You've entered incorrect code!";
        }
		
		}
		
     
    }

    //if user click change password button
    if(isset($_POST['change-password'])){
        $_SESSION['info'] = "";
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
        if($password !== $cpassword){
            $errors['password'] = "Confirm password not matched!";
        }else{
            $code = 0;
	        $email = $_SESSION['email']; //getting this email using session
			$encpass=md5($_POST['password']);	
            $update_pass = "UPDATE new_user SET code = $code, password = '$encpass' WHERE email = '$email'";
            $run_query = mysqli_query($conn, $update_pass);
            if($run_query){
                $info = "Your password changed. Now you can login with your new password.";
                $_SESSION['info'] = $info;
                header('Location: password-changed.php');
            }else{
                $errors['db-error'] = "Failed to change your password!";
            }
        }
    }
    
   //if login now button click
    if(isset($_POST['login-now'])){
        header('Location: ../login.php');
    }
?>