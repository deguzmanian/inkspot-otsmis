<?php
session_start();
include('config/dbcon.php');
$t = "";
if($_POST["role"] != ""){
$t = " and role_as =".$_POST["role"]."";
}
$query = "SELECT * FROM user WHERE approved = 1".$t;
$query_run = mysqli_query($con, $query);
$d = "";
if (mysqli_num_rows($query_run) > 0) {
    foreach ($query_run as $row) {
$rl = "";
if ($row['role_as'] == '1') {
    $rl = 'Tattoo shop';
} elseif ($row['role_as'] == '0') {
    $rl = 'Customer';
}
elseif ($row['role_as'] == '3') {
    $rl = 'Freelancer';
} elseif ($row['role_as'] == '2') {
    $rl = 'Super Admin';
}

        $d .= "<tr>
            <td>".$row['id']."</td>
            <td>".$row['fname']."</td>
            <td>".$row['lname']."</td>
            <td>".$row['email']."</td>
            <td>".$row['phonenumber']."</td>
            <td>".$rl."</td>
            
            
        
        </tr>";
    }
} else {

    $d = '<tr>
                        <td colspan="8">No Record Found</td>
                    </tr>';
}
echo $d;