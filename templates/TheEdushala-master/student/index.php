<?php
include_once('user/includes/dbconnection.php');
header('location:user/login.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

  

  <title>College Admission Management System|| Home Page</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="css/landing-page.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-light bg-light static-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">College Admission Management System</a>
      <a class="btn btn-primary" href="user/login.php">User Sign In</a>
        <a class="btn btn-primary" href="user/signup.php">User Sign up</a>
          <a class="btn btn-primary" href="admin/login.php">Admin Login</a>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-12 mx-auto">
          <h1 class="mb-5">Welcome to College Admission Management System (CAMS)</h1>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
     
        </div>
      </div>
    </div>
  </header>

<hr />
  <!-- Image Showcases -->
  <section class="showcase">
    <div class="container-fluid p-0">
      <div class="row no-gutters">

        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/college.jpg');"></div>

        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
        
       <h2>Latest notification</h2>
<ul>
<?php $query=mysqli_query($con,"select * from tblnotice");
while ($row=mysqli_fetch_array($query)) {
?>
<li><a href="notice-details.php?nid=<?php echo $row['ID'];?>" target="_blank"><?php echo $row['Title'];?></li>
<?php } ?>
</ul>

        </div>
      </div>
 
      </div>
    </div>
  </section>




  <!-- Footer -->
  <footer class="footer bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
     
          <p class="text-muted small mb-4 mb-lg-0">&copy; CAMS <?php echo date('Y');?>. All Rights Reserved.</p>
        </div>
  
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
