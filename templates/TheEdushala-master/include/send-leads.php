<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include("comps/dbconnect.php");
    $leadname = $_POST["leadname"];
    $leadcontact = $_POST["leadcontact"];
    $leademail = $_POST["leademail"];
    $leadcity = $_POST["leadcity"];
    $leadcourse = $_POST["leadcourse"];
    $leadurl = $_POST["leadurl"];
    $sql = "INSERT INTO `leads` (`Name`, `Contact`, `Email`, `City`, `Course`, `Url`, `Date` ) VALUES ('$leadname', '$leadcontact', '$leademail', '$leadcity', '$leadcourse', '$leadurl', current_timestamp())";
    $result = mysqli_query($conn, $sql);
    header('location:'.$leadurl );

}
?>