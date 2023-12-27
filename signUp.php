 <?php 
 include("connection.php");
 session_start();
 $message="";
          $username="";
		  $email="";
		  $phone="";
		  $fullname="";
		  $check="";
		  $gender="";
		  $password="";
		  $cpassword="";
 
 if(isset($_POST['register'])){

		  $username=mysqli_real_escape_string($conn,$_POST['username']);
		  $email=mysqli_real_escape_string($conn,$_POST['email']);
		  $phone=mysqli_real_escape_string($conn,$_POST['phone']);
		  $fullname=mysqli_real_escape_string($conn,$_POST['fullname']);
		  $gender=$_POST['gender'];
		  $password=md5($_POST['password']);
		  $cpassword=md5($_POST['cpassword']);
		  $role="user";
		  $selectQuery=mysqli_query($conn,"select * from new_user WHERE email='$email'");
		  $row=mysqli_num_rows($selectQuery);
		  
		  $selectQuery=mysqli_query($conn,"select * from new_user WHERE username='$username'");
		  $row1=mysqli_num_rows($selectQuery);
		    if($password!=$cpassword){
			    $message="Password not match!";
			}else if($row>0){
			    $message="This E-mail is Already Exist!";
			}else if($row1>0){
			    $message="This Username is Already Exist!";
			}else{
			
			# $code = rand(999999, 111111);
			$code = 0;
             $status = "verified";
			
			 $query="INSERT INTO new_user( fullname, gender, phone, email,username,password,code,role,status,see) VALUES ('$fullname','$gender','$phone','$email','$username','$password','$code','$role','$status','no')";
			 $runquery=mysqli_query($conn,$query);
			 if($runquery){
				 
		  #  $subject = "Email Verification Code";
          #  $message = "Your verification code is $code";
           # $sender = "From: oromobiblestudy@yahoo.com";
            #if(mail($email, $subject, $message, $sender)){
             #   $info = "We've sent a verification code to your email - $email";
              #  $_SESSION['info'] = $info;
               # $_SESSION['email'] = $email;
                #$_SESSION['password'] = $password;
                #header('location: userVerification.php');
                #exit();
            #}else{
             #   $message = "Failed while sending code!";
            #}   
			header("location:login.php");
		 }else{
				 $message="not register ".mysqli_error();
			  } 
			  }
		  }

	  
	?>  

<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

/* Reseting */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
#results { padding:20px; border:1px solid; background:#ccc; }
body{
    background-image:url("assets/images/appartama.jpg");
	background-attachment:fixed;
	background-size:cover;
	background-position:center;
	background-repeat:no-repeat;
   
}

.wrapper{
    max-width: 1200px;
    background-color: #fff;
    border-radius: 10px;
    position: relative;
    display: flex;
    margin: 50px auto;
    box-shadow: 0 8px 20px 0px #1f1f1f1a;
    overflow: hidden;
}

.wrapper .form-left{
    background: #808080;
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
    padding: 20px 40px;
    position: relative;
    width: 100%;
    color: #fff;
}

.wrapper h2{
    font-weight: 700;
    font-size: 25px;
    padding: 5px 0 0;
    margin-bottom: 34px;
    pointer-events: none;
}

.wrapper .form-left p{
    font-size: 0.9rem;
    font-weight: 300;
    line-height: 1.5;
    pointer-events: none;
}

.wrapper .form-left .text{
    margin: 20px 0 25px;
}

.wrapper .form-left p span{
    font-weight: 700;
}

.wrapper .form-left input{
    padding: 15px;
    background: #fff;
    border-top-left-radius: 5px;
    border-bottom-right-radius: 5px;
    width: 180px;
    border: none;
    margin: 15px 0 50px 0px;
    cursor: pointer;
    color: #333;
    font-weight: 700;
    font-size: 0.9rem;
    appearance: unset;
    outline: none;
}

.wrapper .form-left input:hover{
    background-color: #f2f2f2;
}

.wrapper .form-right{
    padding: 20px 40px;
    position: relative;
    width: 100%;
}

.wrapper .form-right h2{
    color: #3786bd;
}

.wrapper .form-right label{
    font-weight: 600;
    font-size: 15px;
    color: #666;
    display: block;
    margin-bottom: 8px;
}

.wrapper .form-right .input-field{
    width: 100%;
    padding: 10px 15px;
    border: 1px solid #e5e5e5;
    border-top-left-radius: 5px;
    border-bottom-right-radius: 5px;
    outline: none;
    color: #333;
}

.wrapper .form-right .input-field:focus{
    border: 1px solid #31a031;
}


.wrapper .option {
    display: block;
    position: relative;
    padding-left: 30px;
    margin-bottom: 12px;
    font-size: 0.95rem;
    font-weight: 900;
    cursor: pointer;
    user-select: none
}

.wrapper .option input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
    height: 0;
    width: 0
}

.wrapper .checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 18px;
    width: 18px;
    background-color: #fff;
    border: 2px solid #ddd;
    border-radius: 2px
}

.wrapper .option:hover input~.checkmark {
    background-color: #f1f1f1
}

.wrapper .option input:checked~.checkmark {
    border: 2px solid #e5e5e5;
    background-color: #fff;
    transition: 300ms ease-in-out all
}

.wrapper .checkmark:after {
    content: "\2713";
    position: absolute;
    display: none;
    color: #3786bd;
    font-size: 1rem;
}

.wrapper .option input:checked~.checkmark:after {
    display: block
}

.wrapper .option .checkmark:after {
    left: 2px;
    top: -4px;
    width: 5px;
    height: 10px
}

.wrapper .register{
    padding: 12px;
    background: #3786bd;
    border-top-left-radius: 5px;
    border-bottom-right-radius: 5px;
    width: 130px;
    border: none;
    margin: 6px 0 50px 0px;
    cursor: pointer;
    color: #fff;
    font-weight: 700;
    font-size: 15px;
}

.wrapper .register:hover{
    background-color: #3785bde0;
}

.wrapper a{
    text-decoration: none;
}

@media (max-width: 860.5px) {
    .wrapper{
        margin: 50px 5px;
    }
}


@media (max-width: 767.5px){
    .wrapper{
        flex-direction: column;
        margin: 30px 20px;
    }

    .wrapper .form-left{
        border-bottom-left-radius: 0px;
    }

    
}

@media (max-width: 575px) {

    .wrapper{
        margin: 30px 15px;
    }

    .wrapper .form-left{
        padding: 25px;
    }
    .wrapper .form-right{
        padding: 25px;
    }
}

</style>

<style type="text/css">
.gradient-custom {
/* fallback for old browsers */
background: #f093fb;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1))
}

.card-registration .select-input.form-control[readonly]:not([disabled]) {
font-size: 1rem;
line-height: 2.15;
padding-left: .75em;
padding-right: .75em;
}
.card-registration .select-arrow {
top: 13px;
}
</style>

<div class="wrapper">
        <div class="form-left">
            
            <p>
            

						
				<div style="margin-left:20px;"class="card-box mb-20">
					
					<div class="pd-2">
						<center><h2 class="text-blue h4">Agreement</h2></center>
					</div>
					<div class="pb-20">
						<table class="table hover multiple-select-row data-table-export nowrap">
						
							<tbody>
			
									<td style="color:white;font-size:18px;padding:20px;font-family:Times New Roman, Times, serif;">
									
									<h5><b>Agreement Between the tenant and landlord in house renting system</b></h5>
<p>Absolutely! While drafting a rental agreement for a house, some considerations should be made.</br>
 The term of the lease, the amount due each month, the terms of the agreement,</br>
 the responsibilities of the landlord and tenant,and any additional special instructions are among them.</br>
 The tenant's right to privacy and the protection of their personal property should both be covered by the rental agreement.</br>
 It should also contain details on the site's usage policies, such as any occupancy limitations and the kinds of activities that are permitted there.</br>
Once all relevant information has been gathered, it should be put together into a legally binding agreement that is fair to both the landlord and the tenant.</p>
<center><h5><b> <a style="color:orange" href="agreementHouseRental.php?agree=agreement">Read more </a></b></h5></center>

									
									
									</td>
									
									
							
							</tbody>
							
						</table>
						
					</div>
				</div>
				
				
				

 </p>
            

        </div>
        <form class="form-right" method="post" enctype="multipart/form-data">
            <h2 class="text-uppercase">Registration form</h2>
			<h4 ><span><?php echo $message; ?></span></h4>
                <div class="mb-3">
                    <label>Full Name</label>
                    <input type="text" minlength="5" maxlength="40" value="<?php echo $fullname;?>" autocomplete="off" name="fullname" id="fullname" required class="input-field">
                </div>
				 <br>
               <div class="mb-3">
                    <label>Phone</label>
                    <input type="text" pattern="[+2519]+[0-9]{12}" value="<?php echo $phone;?>" autocomplete="off" title="Please enter valid phone number" name="phone" id="phone" required class="input-field">
                </div> 
       <br>
            <div class="mb-3">
                <label>Your Email</label>
                <input type="email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="<?php echo $email;?>" autocomplete="off" class="input-field" name="email" required>
             </div>
			  <br>
			 <div class="mb-3">
                <label>Username</label>
                <input type="text" minlength="3" maxlength="40" class="input-field"autocomplete="off" value="<?php echo $username;?>" name="username" required>
             </div>
			  <br>
			  <div class="mb-3">
                <label >Gender 
                <input style="margin-left:50px" type="radio"  name="gender" value="male" required>&nbsp Male
				<input style="margin-left:50px" type="radio"  name="gender" value="female" required>&nbsp Female
				<input style="margin-left:50px" type="radio"  name="gender" value="other" required>&nbsp Other
				</label>
             </div>
				 <br>
             <div class="row">
                <div class="col-sm-6 mb-3">
                    <label>Password</label>
                    <input type="password" autocomplete="off" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" value="<?php echo $password;?>" minlength="8" maxlength="16" name="password" id="password" required title="password should be include atleast one uppercase, lowercase and number" class="input-field">
                </div>
				 <br>
                <div class="col-sm-6 mb-3">
                    <label>Confirm Password</label>
                    <input type="password" autocomplete="off" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" name="cpassword" value="<?php echo $cpassword;?>" minlength="8" maxlength="16" id="cpassword" required title="password should be include atleast one uppercase, lowercase and number" class="input-field">
                </div>
            </div>
			 <br>
			   <div class="mb-3">
                <label  class="option">I agree to the <a href="agreementHouseRental.php?agree=agreement">Terms and Conditions</a>
                    <input type="checkbox" name="check" checked disabled>
					 <span class="checkmark"></span>
                </label>
            </div>
			<br>
           <center>
            <div class="form-field">
                <input style="color:white;border:2px;background-color:green;margin:5px;padding:5px;width:200px;font-size:20px;" type="submit" value="Register"  name="register">
				<button style="border:2px;background-color:green;margin:5px;padding:5px;width:200px"><a style="color:white;;font-size:20px;" href="login.php">Login</a></button>
            </div>
             </center> 
			
        </form>
    </div>
	

	