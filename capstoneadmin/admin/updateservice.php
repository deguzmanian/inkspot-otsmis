<?php
include('config/dbcon.php');

$res = $con->query("update services set estimated_amount='".$_POST["price"]."' where id=".$_POST["id"]."");
echo $con->affected_rows;
?>