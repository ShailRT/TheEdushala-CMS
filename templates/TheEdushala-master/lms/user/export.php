<?php
session_start();
      //export.php  
 if(isset($_POST["export"]))  
 {  
      $connect = mysqli_connect("theedushala.com", "theedush_edushala", "edushala3110", "theedush_lms");  
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('Name', 'Contact', 'Email',  'City', 'Course', 'Date'));  
      $query = $_SESSION['query']; 
      $result = mysqli_query($connect, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  

 }  
?>