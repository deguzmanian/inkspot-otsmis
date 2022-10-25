<?php
session_start();
$d = date($_POST["year"].'-'.$_POST["month"]);
$last = date('t', strtotime($d));
echo $last;
?>