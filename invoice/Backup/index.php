<?php
  date_default_timezone_set("Asia/Kolkata");
  error_reporting(0);
  $message = $_REQUEST['s'];
  $invoice_id = $_REQUEST['i'];
  $error = $_REQUEST['e'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>POS Invoice</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="css/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="css/vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="css/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="css/images/favicon.png" />
  <script src="css/sweetalert/sweetalert.js"></script>
	<script src="css/jquery/dist/jquery.min.js"></script>
</head>
<body>
  <?php
        if(!empty($message)){
          echo'<script type="text/javascript">
              jQuery(function validation(){
              swal("Invoice Created","Invoice Number #'.$invoice_id.'", "success", {
              button: "Continue",
                });
              });
              </script>';
            }else{}
			if(empty($error)){
			}else{
			  echo'<script type="text/javascript">
				  jQuery(function validation(){
				  swal("Failed to create Invoice", "Please try again!", "error", {
				  button: "Continue",
					});
				  });
			  </script>';
			}
      ?>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
          <a class="navbar-brand brand-logo" href="index.php"><img src="css/images/logo.svg" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="index.php"><img src="css/images/logo-mini.svg" alt="logo"/></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
          </button>
        </div>  
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-4 w-100">
          <li class="nav-item nav-search d-none d-lg-block w-100">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="search">
                  <i class="mdi mdi-magnify"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="css/images/faces/face5.jpg" alt="profile"/>
              <span class="nav-profile-name">Shubham Sajannavar</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="mdi mdi-settings text-primary"></i>
                <p class="btn">Settings</p>
              </a>
              <a class="dropdown-item">
                <i class="mdi mdi-logout text-primary"></i>
                <form action="../logout.php" method="post">
                  <input type="submit" class="btn" name="logout" value="Logout">
                </form>
                
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-circle-outline menu-icon"></i>
              <span class="menu-title">UI Elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="css/pages/ui-features/buttons.html">Buttons</a></li>
                <li class="nav-item"> <a class="nav-link" href="css/pages/ui-features/typography.html">Typography</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="css/pages/forms/basic_elements.html">
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">Form elements</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="css/pages/charts/chartjs.html">
              <i class="mdi mdi-chart-pie menu-icon"></i>
              <span class="menu-title">Charts</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="css/pages/tables/basic-table.html">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Tables</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="css/pages/icons/mdi.html">
              <i class="mdi mdi-emoticon menu-icon"></i>
              <span class="menu-title">Icons</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="mdi mdi-account menu-icon"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="css/pages/samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="css/pages/samples/login-2.html"> Login 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="css/pages/samples/register.html"> Register </a></li>
                <li class="nav-item"> <a class="nav-link" href="css/pages/samples/register-2.html"> Register 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="css/pages/samples/lock-screen.html"> Lockscreen </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="documentation/documentation.html">
              <i class="mdi mdi-file-document-box-outline menu-icon"></i>
              <span class="menu-title">Documentation</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                  <div class="mr-md-3 mr-xl-5">
                    <h2>
                      <?php                        
                        $today = date("H");
                        if($today >= 00 && $today < 12){
                          echo "Good Morning";
                        }elseif($today > 12 && $today < 16){
                          echo "Good Afternoon";
                        }elseif($today >= 16 && $today < 24){
                          echo "Good Evening";
                        }elseif($today == 12){
                          echo "Good Noon";
                        }else{
                          echo "Welcome Back,";
                        }
                      ?>
                    </h2>
                  </div>
            
                </div>
                <div class="d-flex justify-content-between align-items-end flex-wrap">
                    <a href="../  " class="btn btn-primary mt-2 mt-xl-0">Dashboard</a>
                </div>
              </div>
            </div>
          </div>
            <!-- This is Slider -->
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body dashboard-tabs p-0">
                  <div class="tab-content py-0 px-0">
                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                      <div class="d-flex flex-wrap justify-content-xl-between">
                        <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-calendar-heart icon-lg mr-3 text-primary"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <!-- <small class="mb-1 text-muted">Start date</small> -->
                            <div class="dropdown">
                              <a class="btn btn-secondary p-0 bg-transparent border-0 text-dark shadow-none font-weight-medium" href="#" role="button" id="dropdownMenuLinkA" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <h5 class="mb-0 d-inline-block"><?php echo date("d M Y"); ?></h5>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-currency-inr mr-3 icon-lg text-danger"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Today's Revenue</small>
                            <h5 class="mr-2 mb-0">577545</h5>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-currency-inr mr-3 icon-lg text-success"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Total Revenue</small>
                            <h5 class="mr-2 mb-0">9833550</h5>
                          </div>
                        </div>
                        <!-- <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-download mr-3 icon-lg text-warning"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Downloads</small>
                            <h5 class="mr-2 mb-0">2233783</h5>
                          </div>
                        </div> -->
                        <!-- <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-flag mr-3 icon-lg text-danger"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Flagged</small>
                            <h5 class="mr-2 mb-0">3497843</h5>
                          </div>
                        </div> -->
                      </div>
                    </div>
                    <div class="tab-pane fade" id="sales" role="tabpanel" aria-labelledby="sales-tab">
                      <div class="d-flex flex-wrap justify-content-xl-between">
                        <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-calendar-heart icon-lg mr-3 text-primary"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Start date</small>
                            <div class="dropdown">
                              <a class="btn btn-secondary dropdown-toggle p-0 bg-transparent border-0 text-dark shadow-none font-weight-medium" href="#" role="button" id="dropdownMenuLinkA" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <h5 class="mb-0 d-inline-block">26 Jul 2018</h5>
                              </a>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuLinkA">
                                <a class="dropdown-item" href="#">12 Aug 2018</a>
                                <a class="dropdown-item" href="#">22 Sep 2018</a>
                                <a class="dropdown-item" href="#">21 Oct 2018</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-download mr-3 icon-lg text-warning"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Downloads</small>
                            <h5 class="mr-2 mb-0">2233783</h5>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-eye mr-3 icon-lg text-success"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Total views</small>
                            <h5 class="mr-2 mb-0">9833550</h5>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-currency-usd mr-3 icon-lg text-danger"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Revenue</small>
                            <h5 class="mr-2 mb-0">$577545</h5>
                          </div>
                        </div>
                        <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-flag mr-3 icon-lg text-danger"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Flagged</small>
                            <h5 class="mr-2 mb-0">3497843</h5>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="purchases" role="tabpanel" aria-labelledby="purchases-tab">
                      <div class="d-flex flex-wrap justify-content-xl-between">
                        <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-calendar-heart icon-lg mr-3 text-primary"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Start date</small>
                            <div class="dropdown">
                              <a class="btn btn-secondary dropdown-toggle p-0 bg-transparent border-0 text-dark shadow-none font-weight-medium" href="#" role="button" id="dropdownMenuLinkA" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <h5 class="mb-0 d-inline-block">26 Jul 2018</h5>
                              </a>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuLinkA">
                                <a class="dropdown-item" href="#">12 Aug 2018</a>
                                <a class="dropdown-item" href="#">22 Sep 2018</a>
                                <a class="dropdown-item" href="#">21 Oct 2018</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-currency-usd mr-3 icon-lg text-danger"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Revenue</small>
                            <h5 class="mr-2 mb-0">$577545</h5>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-eye mr-3 icon-lg text-success"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Total views</small>
                            <h5 class="mr-2 mb-0">9833550</h5>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-download mr-3 icon-lg text-warning"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Downloads</small>
                            <h5 class="mr-2 mb-0">2233783</h5>
                          </div>
                        </div>
                        <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-flag mr-3 icon-lg text-danger"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Flagged</small>
                            <h5 class="mr-2 mb-0">3497843</h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- This is Slider -->
          <div class="row">
            <div class="col-md-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Sales Invoice</p>
                  <div class="table-responsive">
                    <div class="card">
                      <div class="card-body">
                        <form class="form-sample" method="post" action="invoice-bil.php">
                          <p class="card-description">
                            Personal info
                          </p>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-2 col-form-label">First Name</label>
                                <div class="col-sm-10">
                                  <input type="text" name="fname" class="form-control border-secondary text-primary" placeholder="First Name" />
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Last Name</label>
                                <div class="col-sm-10">
                                  <input type="text" name="lname" class="form-control border-secondary text-primary" placeholder="Last Name" />
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-2 col-form-label ">Address</label>
                                <div class="col-sm-10">
                                  <input type="text" name="address" class="form-control border-secondary text-primary" placeholder="Address"/>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Mobile</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control border-secondary text-primary" name="phone" placeholder="Phone Number"/>
                                </div>
                              </div>
                            </div>
                          </div>
                          
                          <p class="card-description">
                            Product Details
                          </p>
                          <div class="row">
                            <div class="col-md-3">
                              <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Item</label>
                                <div class="col-sm-10">
                                    <select name="item" class="form-control border-secondary text-primary">
                                      <option>Sadi</option>
                                      <option>Pice</option>
                                      <option>Topy</option>
                                      <option>Cutpice</option>
                                    </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Price</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control border-secondary text-primary" name="amount" id="amount" placeholder="1234"/>
                                </div>
                              </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Qty</label>
                                <div class="col-sm-10">
                                  <input type="text" onkeyup="totalAmount()" class="form-control border-secondary text-primary" name="qty" id="qty" placeholder="10"/>
                                </div>
                              </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">GST</label>
                                <div class="col-sm-9">
                                <select name="gst" id="gst" class="form-control border-secondary text-primary">
                                      <option>5 %</option>
                                      <option>8 %</option>
                                      <option>12 %</option>
                                      <option>18 %</option>
                                    </select>
                                </div>
                              </div>
                            </div>


                          </div>
                          <div class="row">
                            <div class="col-md-6">                              
                              
                            </div>
                            <div class="col-md-3">
                              <div class="form-group row">
                                <div class="col-sm-2"></div>
                                
                                <div class="col-sm-10">                                  
                                  <input type="text" class="form-control border-secondary text-danger text-primary" name="totl" id="totl" readonly/>
                                  <label class="col-form-label text-muted">Total of Price and No. of Item</label>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-3">

                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">discount</label>
                                <div class="col-sm-9">
                                  <input type="text" name="discount" id="discount" onkeyup="TextChange()" class="text-primary form-control border-secondary"/>
                                </div>
                              </div>

                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">GST</label>
                                <div class="col-sm-9">
                                  <input type="text" name="gstamt" id="gstamt" class="form-control border-secondary text-primary" readonly/>
                                </div>
                              </div>

                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Total</label>
                                <div class="col-sm-9">
                                  <input type="text" name="total" id="total" class="form-control border-secondary text-primary" readonly/>
                                </div>
                              </div>

                              <div class="form-group row">                                
                              <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                  <input type="submit" class="btn btn-danger col-sm-12" name="submit" value="Create Invoice" />
                                </div>
                              </div>

                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block"> © Copyright <?php echo date("Y"); ?> Invoice System. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Made with <i class="mdi mdi-heart text-danger"></i> by Shubham Sajannavar</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="css/vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="css/vendors/chart.js/Chart.min.js"></script>
  <script src="css/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="css/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="css/js/off-canvas.js"></script>
  <script src="css/js/hoverable-collapse.js"></script>
  <script src="css/js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="css/js/dashboard.js"></script>
  <script src="css/js/data-table.js"></script>
  <script src="css/js/jquery.dataTables.js"></script>
  <script src="css/js/dataTables.bootstrap4.js"></script>
  <!-- End custom js for this page-->

  <script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

<script type="text/javascript">
  function TextChange() {
    // Fetch Data from Textbox
    var amount = document.getElementById('amount').value;
    var qty = document.getElementById('qty').value;
    var gst = document.getElementById('gst').value;
    var discount = document.getElementById('discount').value;

    // Computaion Code
    var beforeGst = (parseFloat(amount) * parseFloat(qty) - parseFloat(discount)).toFixed(2);
    var afterGst = ((parseFloat(beforeGst) * 5)/(100 + parseInt(gst))).toFixed(2);
    var total = (parseFloat(beforeGst) + parseFloat(afterGst)).toFixed(2);
    //Computation Completes

    // Display Data in Textbox
    document.getElementById('gstamt').value=afterGst;
    document.getElementById('total').value=total;
  }

  function totalAmount(){
    var amount = document.getElementById('amount').value;
    var qty = document.getElementById('qty').value;

    var total = (parseFloat(amount) * parseFloat(qty));
    document.getElementById('totl').value=total;
  }
</script>
</body>

</html>

