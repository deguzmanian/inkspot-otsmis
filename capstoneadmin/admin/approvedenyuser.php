<?php
include('config/dbcon.php');
$appr = (int)$_POST['approve'];
$res = $con->query("UPDATE user set approved=".$appr." WHERE id=".$_POST['id']."");
if($con -> affected_rows > 0)
    echo 1;
else
    echo 0;
?>