<?php

use function PHPSTORM_META\map;

$server = "theedushala.com";
$username = "theedush_edushala";
$password = "edushala3110";
$database = "theedush_lms";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){

    die("Error".mysqli_connect_error());
}
?>