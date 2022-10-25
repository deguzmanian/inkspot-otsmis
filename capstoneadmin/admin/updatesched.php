<?php
session_start();
include('config/dbcon.php');
$days = json_decode($_POST["days"]);

$res = $con->query("DELETE FROM `schedule` WHERE shopid=".$_SESSION["shopId"]."");
foreach($days as $d) {
 

        $r = $con->query("INSERT INTO `schedule`(`shopid`, `day_`, `from_`, `to_`, `void`) VALUES (".$_SESSION["shopId"].",'".mysqli_real_escape_string($con,$d->day_)."','".mysqli_real_escape_string($con,$d->from_)."','".mysqli_real_escape_string($con,$d->to_)."',".$d->void.")");
        echo mysqli_affected_rows($con);
  
}
?>