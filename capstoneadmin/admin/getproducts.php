<?php
session_start();
include('config/dbcon.php');

$res = $con->query("SELECT * FROM `tattoo_products` t left join services s on t.serviceid=s.id WHERE t.shopid=".$_SESSION["shopId"]." and t.void=0 order by t.id desc");
$data = array();
foreach ($res as $r) {
    $data[] = array(
        "name_" => $r["equipment_name"],
        "stocks" => $r["stocks"],
        "id" => $r["serviceid"],
        "serv" => $r["type_services"]
    );
}
echo json_encode($data);
?>