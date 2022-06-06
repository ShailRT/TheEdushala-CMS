<?php
$showAlert = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST"){
  include 'comps/dbconnect.php';
  $username = $_POST["username"];
  $password = $_POST["password"];
  $cpassword = $_POST["cpassword"];
  // $exists = false ;
  $existSql = "SELECT * FROM `users` WHERE username = '$username'";
  $result = mysqli_query($conn, $existSql);
  $numExistRows = mysqli_num_rows($result);
  if($numExistRows > 0){
    // $exists = true;
    $showError = "Username Already Exists";
  }else{
    // $exists = false;
    if (($cpassword == $password)){
      $sql = "INSERT INTO `users` (`username`, `password`, `date`) VALUES ('$username', '$password', current_timestamp())";
      $result = mysqli_query($conn, $sql);
      if ($result){
        $showAlert = true;

      }
    }else{
      $showError = "Passwords do not match";
    }
  }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<body>
      <?php 
      require 'comps/navbar.php';
      ?>
      <?php 
      if ($showAlert){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Your account is now created and you can login.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
      }
      if ($showError){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Alert!</strong> '.$showError.'
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
      }
      ?>
      

    <div class="container">
        <h2 class="text-center">Signup to our website</h2>
        <form action="/edushala/loginsystem/signup.php" method="post">
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
          </div>
          <div class="mb-3">
            <label for="cpassword" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="cpassword" name="cpassword">
          </div>
          
          <button type="submit" class="btn btn-primary">Signup</button>
      </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</body>
</html>

