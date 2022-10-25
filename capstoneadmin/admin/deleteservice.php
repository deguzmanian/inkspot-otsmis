<?php
session_start();
include('config/dbcon.php');
$res = $con->query("UPDATE services set void=1 where id=".$_POST["id"]."");
echo mysqli_affected_rows($con);
?>