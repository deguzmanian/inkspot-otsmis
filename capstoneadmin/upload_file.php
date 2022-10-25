<?php
session_start();
include('admin/config/dbcon.php');
// $fileName = $_FILES["fileName"]["name"];
// $tempFileName = $_FILES["fileName"]["tmp_name"];
// $file = $_POST["fileName"];
// $i = $_SESSION['auth_role'] == ""
$inserted = 0;
$up = "";
$msg ="Click Ok to confirm submission of documents";

for($i = 0; $i < $_POST["c"]; $i++){
$n = $i + 1;

$targetFile = "uploads/documents/".basename($_FILES["fileData$n"]["name"]);
$fileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
$newFileName = $_SESSION["userId"].".".$fileType;

// echo $targetFile;

if(move_uploaded_file($_FILES["fileData$n"]["tmp_name"], /*$targetFile*/"uploads/documents/".$newFileName)) {
$up .= ";".$newFileName;
} else {
    echo 0;
}

}
$con->query("UPDATE user set docUploaded='".mysqli_real_escape_string($con, $up)."', approved=0 where id=".$_SESSION["userId"]."");
if ($con->affected_rows > 0)
    echo 1;
    // $inserted++;
else{
    echo 2;
}

// if($inserted == 2){
//     echo 1:
// }
// else{
//     echo 
// }

// echo  ? 1:2;
