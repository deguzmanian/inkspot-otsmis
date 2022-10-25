<?php
include('config/dbcon.php');

$id = $_GET['id'];
$query = "DELETE FROM tattoo_products WHERE id = '$id';";
$result = mysqli_query($con, $query);
if ($result) {
    mysqli_close($con);
    header("location: inventories.php");
    exit();
} else {
    echo "Error deleting record";
}
?>