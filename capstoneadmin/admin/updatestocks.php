<?php
include('config/dbcon.php');

$res = $con->query("update tattoo_products set stocks=".$_POST["stocks"].", date_added=curdate() where id=".$_POST["id"]."");
echo $con->affected_rows;
?>