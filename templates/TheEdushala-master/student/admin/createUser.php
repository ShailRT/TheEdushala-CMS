<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['aid']==0)) {
  header('location:logout.php');
  } else{


  ?>
  <?php 
  if(isset($_POST['submit']))
  {
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $contno=$_POST['contactno'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $state=$_POST['state'];
    $city=$_POST['city'];
    $formNo=$_POST['formNo'];
    $ret=mysqli_query($con, "select Email from tbluser where Email='$email' || MobileNumber='$contno'");
    $result=mysqli_fetch_array($ret);
    if($result>0){
echo "<script>alert('This email or Contact Number already associated with another account');</script>";

    }
    else{
    $query=mysqli_query($con, "insert into tbluser(FirstName, LastName,MobileNumber, Email,  Password, State, City, formNo) value('$fname', '$lname','$contno', '$email', '$password', '$state', '$city ','$formNo')");
    if ($query) {
    echo "<script>alert('You have successfully registered');</script>";
  }
  else
    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}
}
  ?>
  <!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>

  <title>College Addmission Management System | Search Application</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
  rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="app-assets/css/vendors.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/app.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu-modern.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/extended/form-extended.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
     <style>
    .errorWrap {
    padding: 10px;
    margin: 20px 0 0px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
    </style>


</head>
<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
<?php include('includes/header.php');?>
<?php include('includes/leftbar.php');?>
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
          <h3 class="content-header-title mb-0 d-inline-block">
           Create User
          </h3>
          <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                 <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a>
                </li>
            
                </li>
                <li class="breadcrumb-item active">Create User</li>
              </ol>
            </div>
          </div>
        </div>
   
      </div>
      <div class="content-body">
        <!-- Input Mask start -->
   
        <!-- Formatter start -->
        <form  method="post" name="signup" onSubmit="return checkpass();">

<div class="row">
  <div class="col-12 col-sm-6 col-md-6">
    <fieldset class="form-group position-relative has-icon-left">
      <input type="text" name="firstname" id="firstname" required="true" class="form-control input-lg"
      placeholder="First Name" tabindex="1">
      <div class="form-control-position">
        <i class="ft-user"></i>
      </div>
    </fieldset>
  </div>
 
  <div class="col-12 col-sm-6 col-md-6">
    <fieldset class="form-group position-relative has-icon-left">
      <input type="text" name="lastname" id="lastname" required="true" class="form-control input-lg"
      placeholder="Last Name" tabindex="2">
      <div class="form-control-position">
        <i class="ft-user"></i>
      </div>
    </fieldset>
  </div>
 
  
</div>

<div class="row">
<div class="col-12 col-sm-6 col-md-6">
<fieldset class="form-group position-relative has-icon-left">
  <input type="text" name="contactno" id="contactno" class="form-control input-lg"
  placeholder="Contact Number" required="true" maxlength="10" tabindex="3" required data-validation-required-message="Please enter display name.">
  <div class="form-control-position">
    <i class="ft-user"></i>
  </div>
  </div>
  <div class="col-12 col-sm-6 col-md-6">
  <fieldset class="form-group position-relative has-icon-left">
      <input type="text" name="formNo" id="formNo" required="true" class="form-control input-lg"
      placeholder="Form Number" tabindex="2">
      <div class="form-control-position">
        <i class="ft-user"></i>
      </div>
    </fieldset>
  </div>
  </div>
  <div class="help-block font-small-3"></div>
</fieldset>
<fieldset class="form-group position-relative has-icon-left">
  <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address"
  tabindex="4" required="true" required data-validation-required-message="Please enter email address.">
  <div class="form-control-position">
    <i class="ft-mail"></i>
  </div>
  <div class="help-block font-small-3"></div>
</fieldset>
<div class="row">
  <div class="col-12 col-sm-6 col-md-6">
    <fieldset class="form-group position-relative has-icon-left">
      <input type="password" name="password" id="password" class="form-control input-lg"
      placeholder="Password" tabindex="5" required>
      <div class="form-control-position">
        <i class="la la-key"></i>
      </div>
      <div class="help-block font-small-3"></div>
    </fieldset>
  </div>
  <div class="col-12 col-sm-6 col-md-6">
    <fieldset class="form-group position-relative has-icon-left">
      <input type="password" name="repeatpassword" id="repeatpassword" class="form-control input-lg"
      placeholder="Repeat Password" tabindex="6" data-validation-matches-match="password" required="true" 
      data-validation-matches-message="Password & Confirm Password must be the same.">
      <div class="form-control-position">
        <i class="la la-key"></i>
      </div>
      <div class="help-block font-small-3"></div>
    </fieldset>
  </div>
</div>
<input type="hidden" value=" " name="state">
<input type="hidden" value=" " name="city">
<!-- <div class="row">
  <div class="col-12 col-sm-6 col-md-6">
    <fieldset class="form-group position-relative has-icon-left">
    <select id="countrySelect" name="state" size="1" onchange="makeSubmenu(this.value)" class="form-select bg-white text-muted" >
<option value="" disabled selected>Choose State</option>
<option>Odisha</option>
<option>Maharashtra</option>
<option>Kerala</option>
</select>
    </fieldset>
  </div>
 
  <div class="col-12 col-sm-6 col-md-6">
    <fieldset class="form-group position-relative has-icon-left">
    <select id="citySelect" size="1" class="form-select white_bg loca" name="city">
<option value="" disabled selected>Choose City</option>
<option></option>
</select>
    </fieldset>
  </div>
 
  
</div> -->
<div class="row">
  <div class="col-12 col-sm-12 col-md-12 text-center">
    <button type="submit" name="submit" class="btn btn-info btn-lg btn-block"><i class="ft-user"></i> Register</button>
  </div>
  <!-- <div class="col-6 col-sm-6 col-md-6">
    <a href="login.php" class="btn btn-danger btn-lg btn-block"><i class="ft-unlock"></i> Login</a>

  </div> -->
   <div class="col-6 col-sm-6 col-md-6">
    

  </div>


</div>
</form>
<!-- <form name="search" method="post" >        
        <section class="formatter" id="formatter">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">User Info</h4>
 
                </div>
                <div class="card-content">
                  <div class="card-body">
                    

  <div class="row">
                      <div class="col-xl-6 col-lg-12">
                        <fieldset>
                          <h5>Search by Student Name / Email id / Contact number
                         
                          </h5>
                          <div class="form-group">

  <input class="form-control white_bg" id="searchdata" type="text" name="searchdata" required>
                          </div>
                        </fieldset>
                      </div>
                    </div>

 
<div class="row">
<div class="col-xl-6 col-lg-12">
<button type="submit" name="search" class="btn btn-info btn-min-width mr-1 mb-1">Search</button>
</div>
</div>

 </form>   -->

            

              
                

 </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Formatter end -->
     
     

      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
<?php include('includes/footer.php');?>
  <!-- BEGIN VENDOR JS-->
  <script src="app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>

  <script src="app-assets/vendors/js/forms/extended/typeahead/typeahead.bundle.min.js"
  type="text/javascript"></script>
  <script src="app-assets/vendors/js/forms/extended/typeahead/bloodhound.min.js"
  type="text/javascript"></script>
  <script src="app-assets/vendors/js/forms/extended/typeahead/handlebars.js"
  type="text/javascript"></script>
  <script src="app-assets/vendors/js/forms/extended/inputmask/jquery.inputmask.bundle.min.js"
  type="text/javascript"></script>
  <script src="app-assets/vendors/js/forms/extended/formatter/formatter.min.js"
  type="text/javascript"></script>
  <script src="../../../app-assets/vendors/js/forms/extended/maxlength/bootstrap-maxlength.js"
  type="text/javascript"></script>
  <script src="app-assets/vendors/js/forms/extended/card/jquery.card.js" type="text/javascript"></script>
  <script src="app-assets/js/core/app-menu.js" type="text/javascript"></script>
  <script src="app-assets/js/core/app.js" type="text/javascript"></script>
  <script src="app-assets/js/scripts/customizer.js" type="text/javascript"></script>
  <script src="app-assets/js/scripts/forms/extended/form-typeahead.js" type="text/javascript"></script>
  <script src="app-assets/js/scripts/forms/extended/form-inputmask.js" type="text/javascript"></script>
  <script src="app-assets/js/scripts/forms/extended/form-formatter.js" type="text/javascript"></script>
  <script src="app-assets/js/scripts/forms/extended/form-maxlength.js" type="text/javascript"></script>
  <script src="app-assets/js/scripts/forms/extended/form-card.js" type="text/javascript"></script>
  <script type="text/javascript">
function checkpass()
{
if(document.signup.password.value!=document.signup.repeatpassword.value)
{
alert('Password and Repeat Password field does not match');
document.signup.repeatpassword.focus();
return false;
}
return true;
} 

</script>
</body>
</html>
<?php }  ?>