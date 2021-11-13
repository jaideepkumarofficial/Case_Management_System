
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="dashboard.html" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="dashboard.html" class="simple-text logo-normal">
          COURTISTIC
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="./dashboard.html">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="./NewCase.html">
              <i class="nc-icon nc-caps-small"></i>
              <p>Add New Case</p>
            </a>
          </li>
          <li>
            <a href="./ListOfCases.html">
              <i class="nc-icon nc-tile-56"></i>
              <p>List Of Cases</p>
            </a>
          </li>
          <li>
            <a href="./UpdateCase.php">
              <i class="nc-icon nc-bell-55"></i>
              <p>Update Case</p>
            </a>
          </li>
          <li>
            <a href="./NewAdmin.html">
              <i class="nc-icon nc-single-02"></i>
              <p>Add new Admin</p>
            </a>
          </li>
          <li>
            <a href="./EditProfil.html">
              <i class="nc-icon nc-spaceship"></i>
              <p>Edit Profile</p>
            </a>
          </li>
          
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">Update Case</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form action="" method="post">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" name="cnr_no" placeholder="Search...">
                <button style="border: none;" name="fetch">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div></button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link btn-magnify" href="javascript:;">
                  <i class="nc-icon nc-layout-11"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-bell-55"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link btn-rotate" href="javascript:;">
                  <i class="nc-icon nc-settings-gear-65"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          
          <div class="col-md-8">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Search Case Details</h5>
              </div>
              <div class="card-body">
                <form action ="updatecase1.php" method="post">
                  <?php
                  require 'conn.php';
                  
                  if(isset($_POST['fetch']))
                  
                  {
                    
                    $cnr_no = $_POST['cnr_no'];
                    $query=mysqli_query($conn,"SELECT * FROM newcase WHERE cnr_no='".$cnr_no."'");  
                    $numrows=mysqli_num_rows($query);  
                    
                    if($numrows > 0)
                    {
                      while($row = mysqli_fetch_array($query))   
                {
                  
                  ?>
                      
                  
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Case Type</label>
                        <input type="text" class="form-control" value="<?php echo $row['case_type'];?>" name="case_type" placeholder="Property" ></label>
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Filing Number</label>
                        <input type="text" class="form-control" value="<?php echo $row['filing_number'];?>" name="filing_number" placeholder="123456789" >
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Filing Date</label>
                        <input type="date" class="form-control" value="<?php echo $row['filing_date'];?>" name="filing_date" placeholder="Date">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Registeration Number</label>
                        <input type="text" class="form-control" name="reg_no" value="<?php echo $row['reg_no'];?>" placeholder="11111/22222" >
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Registeration Date</label>
                        <input type="date" class="form-control" name="reg_date" value="<?php echo $row['reg_date'];?>" placeholder="Username" value="michael23">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">CNR Number</label>
                        <input type="text" class="form-control" value="<?php echo $row['cnr_no'];?>" name="cnr_no" placeholder="KABC6565656565">
                      </div>
                    </div>
                  </div>
                  <h5 class="card-title">Case Status</h5>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>First Hearing Date</label>
                        <input type="date" class="form-control" name="first_hearing_date" value="<?php echo $row['first_hearing_date'];?>" placeholder="Company" value="Chet">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Next Hearing Date</label>
                        <input type="date" class="form-control" name="next_hearing_date" value="<?php echo $row['next_hearing_date'];?>" placeholder="Last Name" value="Faker">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Stage of Case</label>
                        <input type="text" class="form-control" name="stage_case" value="<?php echo $row['stage_case'];?>" placeholder="SUMMONS">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Court Number</label>
                        <input type="text" class="form-control" name="court_name" value="<?php echo $row['court_name'];?>" placeholder="123456789" >
                      </div>
                    </div>
                  </div>
                  <h5 class="card-title">Petitioner and Advocate</h5>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Name (Case holder)</label>
                        <input type="text" class="form-control" name="pname" value="<?php echo $row['pname'];?>" placeholder="RAJ">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Advocate Name</label>
                        <input type="text" class="form-control" name="paname" value="<?php echo $row['paname'];?>" placeholder="KUMAR" >
                      </div>
                    </div>
                  </div>
                  <h5 class="card-title">Respondent and Advocate</h5>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Name (Opposite Case holder)</label>
                        <input type="text" class="form-control" name="rname" value="<?php echo $row['rname'];?>" placeholder="RAJ">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Advocate Name</label>
                        <input type="text" class="form-control" name="raname" value="<?php echo $row['raname'];?>" placeholder="KUMAR" >
                      </div>
                    </div>
                  </div>
                  
                  <h5 class="card-title">IA Details</h5>
                
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>IA Number</label>
                        <input type="text" class="form-control" name="ia_no" value="<?php echo $row['ia_no'];?>" placeholder="123456" >
                      </div>
                    </div>
                    
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Party</label>
                        <input type="text" class="form-control" name="party" value="<?php echo $row['party'];?>" placeholder="RAJ">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Date of Filing</label>
                        <input type="date" class="form-control" name="date_of_filing" value="<?php echo $row['date_of_filing'];?>" placeholder="">
                      </div>
                    </div>
                  </div>
                  <h5 class="card-title">NEXT CASE HEARING</h5>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Judge</label>
                        <input type="text" name="jname"  class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Business on Date</label>
                        <input type="date" class="form-control" name="b_on_date" >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Hearing Date</label>
                        <input type="date" class="form-control" name="h_date">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Puropse of Hearing</label>
                        <input type="text" class="form-control" name="p_hearing" >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" name="add1" class="btn btn-primary btn-round">Update CASE</button>
                    </div>
                  </div>
                  <?php
                }
              }
            }
          ?>
                  
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
             
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                © <script>
                  document.write(new Date().getFullYear())
                </script>
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
</body>

</html>