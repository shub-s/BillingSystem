<?php
	error_reporting(0);
    include("config.php");
    session_start();
    if($_POST['submit']){
        $uname = $_POST['username'];
        $pass = md5(base64_encode($_POST['pass']));

        $query = mysqli_query($conn,"select * from login_tbl where username='$uname' and password='$pass' and status='Active' ");
        $row = mysqli_fetch_array($query);

        if($row['username'] == $uname && $row['password'] == $pass){
			$_SESSION['uname'] = $row['username'];
			$message = 'success';
            header("refresh:3; ../dashboard.php");
        }else{
            $error = md5(base64_encode("admin"));
            header("refresh:3; index.php");
        }

    }else{
        
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>POS Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script src="css/sweetalert/sweetalert.js"></script>
	<script src="css/jquery/dist/jquery.min.js"></script>
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
        
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form method="POST" action="index.php" class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-32">
						POS Account Login
					</span>

					<span class="txt1 p-b-11">
						Username
					</span>
					<div class="wrap-input100 validate-input m-b-36"  data-validate = "Username is required">
						<input class="input100" type="text" name="username" placeholder="Username" autocomplete="off">
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" placeholder="Password" name="pass" >
						<span class="focus-input100"></span>
					</div>
					
					<div class="flex-sb-m w-full p-b-48">
						<div class="contact100-form-checkbox">
							
							<label class="">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt3">
								Forgot Password?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
                        <input type="submit" class="login100-form-btn" name="submit" value="Submit">
					</div>

                </form>
                
            </div>
            
        </div>       
        
	</div>

	<?php
        if(!empty($message)){
          echo'<script type="text/javascript">
              jQuery(function validation(){
              swal("Login Success", "Welcome '.$row['fname'].' '.$row['lname'].'", "success", {
              button: "Continue",
                });
              });
              </script>';
            }else{}
			if(empty($error)){
			}else{
			  echo'<script type="text/javascript">
				  jQuery(function validation(){
				  swal("Login Fail", "Username or Password is Wrong!", "error", {
				  button: "Continue",
					});
				  });
			  </script>';
			}
      ?>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>