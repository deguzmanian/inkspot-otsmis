<?php
session_start();
include('config/dbcon.php');
$t = "";
if($_POST["appointment"] != ""){
$t = " and appointment_status =".$_POST["appointment"]."";
}
$query = "SELECT * FROM appointment".$t;
$query_run = mysqli_query($con, $query);
$d = "";
if (mysqli_num_rows($query_run) > 0) {
    foreach ($query_run as $row) {
$rl = "";
if ($row['appointment_status'] == '0') {
    $rl = 'Approved';
} elseif ($row['appointment_status'] == '1') {
    $rl = 'Cancelled';
}

        $d .= "<tr>
            <td>".$row['id']."</td>
            <td>".$row['fname']."</td>
            <td>".$row['lname']."</td>
            <td>".$row['email']."</td>
            <td>".$row['phonenumber']."</td>
            <td>".$rl."</td>
            <td><a href='register-edit.php?id=".$row['id']." class='btn btn-success'>Edit</a></td>

                <td>
                    <form action='code.php' method='POST'>
                        <button type='submit' name='user_delete' value='".$row['id']." class='btn btn-danger'>Archive</button>
                    </form>
                </td>
        
        </tr>";
    }
} else {

    $d = '<tr>
                        <td colspan="8">No Record Found</td>
                    </tr>';
}
echo $d;