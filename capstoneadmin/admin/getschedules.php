<?php
session_start();
include('config/dbcon.php');
$j = array();
$res = $con->query("SELECT * FROM `schedule` where shopid=".$_SESSION["shopId"]." and void=0");
while($r = mysqli_fetch_assoc($res)){
    $j[] = $r;
}
echo json_encode($j);
?>