<?php
    session_start();
    include_once "../../admin/config/dbcon.php";
    $outgoing_id = $_SESSION['unique_id'];
    $user_role = $_SESSION['role_as'];

    if ($user_role === '1') {
        $sql = " SELECT unique_id, fname, lname FROM user WHERE role_as=0";
    } else {
        $sql = " SELECT u.unique_id, u.fname, u.lname, shops.name as shopname FROM user u join tattooshops shops on shops.id=u.shopid WHERE u.role_as=1";
    }

    $query = mysqli_query($con, $sql);
    $output = "";
    if (mysqli_num_rows($query) == 0) {
        $output .= "No users are available to chat";
    } elseif (mysqli_num_rows($query) > 0) {
        include_once "data.php";
    }
    echo $output;
?>