<?php

session_start();
include('admin/config/dbcon.php');

$res = $con->query("SELECT day_,time_format(from_,'%h:%i %p') as from_,time_format(to_,'%h:%i %p') as to_,void FROM `schedule` where shopid=".$_SESSION["shopid"]." order by cast(day_ as int) asc");
$d ="";
// $d = "SELECT day_,time_format(from_,'%h:%i %p') as from_,time_format(to_,'%h:%i %p') as to_,void FROM `schedule` where shopid=".$_SESSION["shopid"]." order by cast(day_ as int) asc";
foreach($res as $row){
 $d .= "_{$row['day_']},{$row['from_']},{$row['to_']},{$row['void']}";
}

echo $d;

?>