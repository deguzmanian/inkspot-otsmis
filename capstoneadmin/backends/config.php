<?php

$server_name = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "tattoo_db";

$conn = mysqli_connect($server_name,$db_username,$db_password);
$dbconfig = mysqli_select_db($conn,$db_name);


?>