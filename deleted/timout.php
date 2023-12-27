<?php

//Set the session timeout for 2 seconds

$timeout = 900;

//Set the maxlifetime of the session

ini_set( "session.gc_maxlifetime", $timeout );

//Set the cookie lifetime of the session

ini_set( "session.cookie_lifetime", $timeout );


//Start a new session

session_start();

//Set the default session name

$s_name = session_name();


//Check the session exists or not

if(isset( $_COOKIE[ $s_name ] )) {


    setcookie( $s_name, $_COOKIE[ $s_name ], time() + $timeout, '/' );

    echo "Session is created for $s_name.<br/>";

}

else

    echo "Session is expired.<br/>";

?>





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