<?php
session_start();
include('config/dbcon.php');

$res = $con->query("INSERT INTO `tattoo_products`(`serviceid`,`equipment_name`, `stocks`, `date_added`,`shopid`) VALUES (".$_POST["service"].",'".mysqli_real_escape_string($con,$_POST["name_"])."',".mysqli_real_escape_string($con,$_POST["stocks"]).",curdate(),".$_SESSION["shopId"].")");

echo mysqli_affected_rows($con);
?>