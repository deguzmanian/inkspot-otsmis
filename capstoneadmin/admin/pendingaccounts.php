<?php
include('config/dbcon.php');

$res = $con->query("SELECT * FROM user WHERE approved = 0 ORDER BY created_at desc");

$rowCount = $res->num_rows;

$tbl = "";
$type = "";
$sub = "";
$x = "";

foreach($res as $row){

    $role = $row['role_as'];

    if ($role == '0') {
        $type = "Client/User";
        $sub = "Waiting for user to enter the verification code";
    } else if ($role == '1') {
        $type = "Owner";
    } else if ($role == '3') {
        $type = "Freelance Artist";
    }else{
        $type="Admin";
    }

    if($role != "2") {
        if($row['docUploaded'] != '') {
            $sub = "<button id='btn-review' data-userid='".$row['id']."'>Review</button>";
        } else {
            if($role == "0") $sub = "<i>Waiting for user to enter the verification code</i>";
            else $sub = "<i>Have not submitted a document yet.</i>";
        }
    } else {
        $sub = "Not Applicable";
    }

    

    $tbl .= "<tr class='".($role == '2' ? 'tr-admin':'')."'>
    <td>".$row['id']."</td>
    <td>".$row['fname']."</td>
    <td>".$row['lname']."</td>
    <td>".$row['email']."</td>
    <td>".$row['phonenumber']."</td>
    <td>".$type."</td>
    <td>".$sub."</td></tr>";
}
echo $tbl;
?>