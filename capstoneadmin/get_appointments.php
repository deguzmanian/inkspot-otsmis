<?php
    include("admin/config/dbcon.php");
    $json = array();

    print_r($_POST['shopid']);

    $res = $con->query("SELECT 
    date_format(a.start_datetime,'%e') as dayapp,
    date_format(a.start_datetime,'%c') as monthapp,
    date_format(a.start_datetime,'%Y') as yearapp,
    date_format(a.start_datetime,'%w') as daynumapp,
    date_format(a.start_datetime,'%r') as timeapp,
    concat(u.fname, ' ', u.lname) as client,
    s.type_services,a.id, a.userid
    FROM `appointment` a 
    left join services s on a.serviceid=s.id 
    left join user u on a.userid=u.id
    where a.shopid=".$_POST["shopid"]." order by a.start_datetime asc");
    $d = "";
    foreach($res as $row){
        $d .= "~{$row['dayapp']}_{$row['monthapp']}_{$row['yearapp']}_{$row['daynumapp']}_{$row['timeapp']}_{$row['client']}_{$row['type_services']}_{$row['id']}_{$row['userid']}"; 
    }

    echo $d;
?>