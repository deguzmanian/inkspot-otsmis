<?php
session_start();
include('config/dbcon.php');

$res = $con->query("SELECT * FROM services where shopid=".$_SESSION["shopId"]." and void=0 order by id desc");
$data = array();
foreach ($res as $r) {
    $data[] = array(
        "name_" => $r["type_services"],
        "price" => $r["estimated_amount"],
        "id" => $r["id"]
    );
}
echo json_encode($data);
?>