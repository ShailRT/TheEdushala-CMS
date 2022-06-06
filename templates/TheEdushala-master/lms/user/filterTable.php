<?php 
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['uid']==0)) {
  header('location:logout.php');
  } else{

  

}

 ?>
<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $category = $_POST['category'];
    $query = "SELECT * FROM `leads` WHERE CONCAT(
        `$category`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `leads`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("theedushala.com", "theedush_edushala", "edushala3110", "theedush_lms");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}
$_SESSION['query'] = $query ;
?>

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>

  <title>Dashboard</title>
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
  <link rel="stylesheet" href="customcss/style-dash.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
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
           Lead Management System
          </h3>
        </div>
        
        
        
      </div>
      <div class="content-body">
   
        <!-- Formatter start -->
 
      <form name="submit" method="post" enctype="multipart/form-data"> 
        <?php

        $pid=$_SESSION['uid'];
        $ret=mysqli_query($con,"select * from tbluser where ID='$pid'");
        $cnt=1;
        while ($row=mysqli_fetch_array($ret)) {

        ?>       
        <section class="formatter" id="formatter">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Leads Viewer</h4>

                </div>
                <div class="card-content">
                  
                  <div class="card-body">
                  
                  <form action="filterTable.php" method="post">
                      <input type="text" name="valueToSearch" placeholder="Value To Search">
                      <select name="category" id="">
                        <option value="Course">Course</option>
                        <option value="Name">Name</option>
                        <option value="City">City</option>
                      </select>
                      <input type="submit" name="search" value="Filter"><br><br>
                      
                      <table class="table table-bordered">
                          <tr>
                              <th>Name</th>
                              <th>Contact</th>
                              <th>Email</th>
                              <th>City</th>
                              <th>Course</th>
                          </tr>

                        <!-- populate table from mysql database -->
                          <?php while($row = mysqli_fetch_array($search_result)):?>
                          <tr>
                              <td><?php echo $row['Name'];?></td>
                              <td><?php echo $row['Contact'];?></td>
                              <td><?php echo $row['Email'];?></td>
                              <td><?php echo $row['City'];?></td>
                              <td><?php echo $row['Course'];?></td>
                          </tr>
                          <?php endwhile;?>
                      </table>
                  </form>
                  <form method="post" action="export.php">  
                     <br><br><input type="submit" name="export" value="CSV Export" class="btn btn-success" />  
                  </form>  
                  </div>
                </div>
              </div>
            </div>
          </div>
<?php } ?>  
        </section>
        <!-- Formatter end -->
      </form>  
     

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
var citiesByState = {
Odisha: ["Bhubaneswar","Puri","Cuttack"],
Maharashtra: ["Mumbai","Pune","Nagpur"],
Kerala: ["kochi","Kanpur"]
}
function makeSubmenu(value) {
if(value.length==0) document.getElementById("citySelect").innerHTML = "<option></option>";
else {
var citiesOptions = "";
for(cityId in citiesByState[value]) {
citiesOptions+="<option>"+citiesByState[value][cityId]+"</option>";
}
document.getElementById("citySelect").innerHTML = citiesOptions;
}
}
function displaySelected() { var country = document.getElementById("countrySelect").value;
var city = document.getElementById("citySelect").value;
alert(country+"\n"+city);
}
function resetSelection() {
document.getElementById("countrySelect").selectedIndex = 0;
document.getElementById("citySelect").selectedIndex = 0;
}
</script>
<script type="text/javascript">
var citiesByState = {
Odisha: ["Bhubaneswar","Puri","Cuttack"],
Maharashtra: ["Mumbai","Pune","Nagpur"],
Kerala: ["kochi","Kanpur"]
}
function makeSubmenu(value) {
if(value.length==0) document.getElementById("citySelect").innerHTML = "<option></option>";
else {
var citiesOptions = "";
for(cityId in citiesByState[value]) {
citiesOptions+="<option>"+citiesByState[value][cityId]+"</option>";
}
document.getElementById("citySelect").innerHTML = citiesOptions;
}
}
function displaySelected() { var country = document.getElementById("countrySelect").value;
var city = document.getElementById("citySelect").value;
alert(country+"\n"+city);
}
function resetSelection() {
document.getElementById("countrySelect").selectedIndex = 0;
document.getElementById("citySelect").selectedIndex = 0;
}
</script>

</body>
</html>

