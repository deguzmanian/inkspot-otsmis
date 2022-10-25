<?php
session_start();
include('config/dbcon.php');
$res = $con->query("DELETE FROM tattoo_products  where id=".$_POST["id"]."");
echo mysqli_affected_rows($con);
?>