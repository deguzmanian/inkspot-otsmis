<?php 
require_once('db-connect.php');
if($_SERVER['REQUEST_METHOD'] !='POST'){
    echo "<script> alert('Error: No data to save.'); location.replace('./') </script>";
    $conn->close();
    exit;
}
extract($_POST);
$allday = isset($allday);

if(empty($id)){
    $sql = "INSERT INTO `appointment` (`title`,`phonenumber`,`description`,`start_datetime`,`appointment_status`) VALUES ('$title','$phonenumber','$description','$start_datetime','pending')";
}else{
    $sql = "UPDATE `appointment` set `title` = '{$title}',`phonenumber` = '{$phonenumber}', `description` = '{$description}', `start_datetime` = '{$start_datetime}' where `id` = '{$id}'";
}
$save = $con->query($sql);
if($save){
    echo "<script> alert('Schedule Successfully Saved.'); location.replace('./') </script>";
}else{
    echo "<pre>";
    echo "An Error occured.<br>";
    echo "Error: ".$con->error."<br>";
    echo "SQL: ".$sql."<br>";
    echo "</pre>";
}
$con->close();
?>