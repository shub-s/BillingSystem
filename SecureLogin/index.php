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
            header("refresh:1; ../dashboard.php");
        }else{
            $error = md5(base64_encode("admin"));
            header("../SecureLogin/");
        }

    }else{
        
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Majestic Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../css/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../css/vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../css/images/favicon.png" />
  <script src="css/sweetalert/sweetalert.js"></script>
	<script src="css/jquery/dist/jquery.min.js"></script>
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
              <div class="brand-logo">
                <img src="../css/images/logo.svg" alt="logo">
              </div>
              <h4>Welcome back!</h4>
              <h6 class="font-weight-light">Happy to see you again!</h6>
              <form class="pt-3" method="POST" action="index.php">
                <div class="form-group">
                  <label for="exampleInputEmail">Username</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="text" name="username" class="form-control form-control-lg border-left-0" id="exampleInputEmail" placeholder="Username" autocomplete="off">
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword">Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="password" name="pass" class="form-control form-control-lg border-left-0" id="exampleInputPassword" placeholder="Password" autocomplete="off">                        
                  </div>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
                <div class="my-3">
                  <input class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" name="submit" value="LOGIN">
                </div>
                <div class="mb-2 d-flex">
                  <button type="button" class="btn btn-facebook auth-form-btn flex-grow mr-1">
                    <i class="mdi mdi-facebook mr-2"></i>Facebook
                  </button>
                  <button type="button" class="btn btn-google auth-form-btn flex-grow ml-1">
                    <i class="mdi mdi-google mr-2"></i>Google
                  </button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="register-2.html" class="text-primary">Create</a>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-6 login-half-bg d-flex flex-row">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; <?php echo date("Y"); ?>  All rights reserved.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
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
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../css/vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../css/js/off-canvas.js"></script>
  <script src="../css/js/hoverable-collapse.js"></script>
  <script src="../css/js/template.js"></script>
  <!-- endinject -->
</body>

</html>
