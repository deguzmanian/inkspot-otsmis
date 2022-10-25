<?php
include('admin/config/dbcon.php');

$dateappoint = mysqli_real_escape_string($con,$_POST["date_"]);

$f = $con->query("SELECT * from appointment where start_datetime='".$dateappoint."'");

if(mysqli_num_rows($f) == 0){
    $res = $con->query("INSERT INTO appointment 
    (`shopid`, `userid`,`serviceid`, `start_datetime`, `phonenumber`, `appointment_status`) VALUES 
        ("
            .$_POST["shopid"].",
            ".$_POST["userid"].",
            ".$_POST["service"].",
            '".$dateappoint."',
            '".$_POST["phonenum"]."',
            'pending'
        )"
    );
    echo 'Success';
}
else {
    echo 'Failed';
}