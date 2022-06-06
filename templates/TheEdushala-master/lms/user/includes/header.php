<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow py-0">
    <div class="navbar-wrapper">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
          <li class="nav-item mr-auto">
          
            
              <h2 class="text-center pt-3 text-light"><strong>The Edushala</strong></h2>
              <!-- <img src="../../assets/images/brand/mcb-logo-big (2).png" alt="img"> -->
              <!-- <img src="../../assets/images/brand/mcb-logo-big.png" class="header-brand-img header-white" alt="logo"> -->
            
          
            <!-- <a class="navbar-brand" href="dashboard.php">
        
             <img src="customAssets\img\logo-buddy.png" alt="college" class="img-fluid" width="200" height="45" class="logo me-auto">
            </a> -->
          </li>
          <!-- <li class="nav-item d-none d-md-block float-right"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="toggle-icon ft-toggle-right font-medium-3 white" data-ticon="ft-toggle-right"></i></a></li> -->
          <li class="nav-item d-md-none">
            <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a>
          </li>
        </ul>
      </div>
      <div class="navbar-container content">
        <div class="collapse navbar-collapse" id="navbar-mobile">
          <ul class="nav navbar-nav mr-auto float-left">
            <!-- <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li> -->

           
          </ul>
          <ul class="nav navbar-nav float-right">
            <li class="dropdown dropdown-user nav-item">
              <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                <span class="mr-1">Hello,
                  <?php
$uid=$_SESSION['uid'];
$ret=mysqli_query($con,"select FirstName from tbluser where ID='$uid'");
$row=mysqli_fetch_array($ret);
$name=$row['FirstName'];

?>
                  <span class="user-name text-bold-700" ><?php echo $name; ?></span>
                </span>
                <span class="avatar avatar-online">
                  <img src="app-assets/images/user.png" alt="avatar"><i></i></span>
              </a>
              <!-- <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="userprofile.php"><i class="ft-user"></i> Edit Profile</a>
                <span class="avatar avatar-online">
                  </span>
              </div> -->
              <div class="dropdown-menu dropdown-menu-right">
                <!-- <a class="dropdown-item" href="change-password.php"><i class="ft-user"></i> Change Pass</a> -->
                <!-- <div class="dropdown-divider"></div> -->
                <a class="dropdown-item" href="logout.php"><i class="ft-power"></i> Logout</a>
              </div>
            </li>

        
     
          </ul>
        </div>
      </div>
    </div>
  </nav>