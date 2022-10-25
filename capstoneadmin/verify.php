<?php
session_start();
include('admin/config/dbcon.php');

$enteredCode = $_POST["enteredCode"];
$code = $_POST["code"];

if($enteredCode == $code) {
    $con->query("UPDATE user set approved=1 where id=".$_SESSION["userId"]."");
    if($con->affected_rows > 0) {
        echo 1;
    } else
        echo 2;
    // header("Location: userindex.php");
} else {
    echo 0;
}


?>