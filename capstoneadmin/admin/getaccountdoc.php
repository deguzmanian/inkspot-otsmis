<?php
include('config/dbcon.php');

$res = $con->query("SELECT * FROM user WHERE id=".$_POST['id']."");
$row = $res->fetch_assoc();
 
$x = [
    "doc" => $row["docUploaded"],
    "name" => "{$row['fname']} {$row['lname']}"
];

exit(json_encode($x));
?>