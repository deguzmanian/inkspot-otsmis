<?php
session_start();
include('config/dbcon.php');

$res = $con->query("INSERT INTO `services`(`type_services`, `estimated_amount`, `shopid`) VALUES ('".mysqli_real_escape_string($con, $_POST["name_"])."','".mysqli_real_escape_string($con, $_POST["price"])."',".$_SESSION["shopId"].")");

echo mysqli_affected_rows($con);
?>