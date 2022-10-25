<?php
    session_start();
    include_once "../../admin/config/dbcon.php";

    $outgoing_id = $_SESSION['unique_id'];
    $searchTerm = mysqli_real_escape_string($con, $_POST['searchTerm']);

    $sql = "SELECT shops.name as shopname, u.unique_id FROM user u join tattooshops shops on shops.id=u.shopid WHERE NOT unique_id='$outgoing_id' AND (shops.name LIKE '%{$searchTerm}%') ";
    $output = "";
    $query = mysqli_query($con, $sql);
    if (mysqli_num_rows($query) > 0) {
        include_once "data.php";
    } else {
        $output .= 'No user found related to your search term';
    }
    echo $output;
?>