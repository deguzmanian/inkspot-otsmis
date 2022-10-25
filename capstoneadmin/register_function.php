<?php
session_start();
include('admin/config/dbcon.php');

$password = mysqli_real_escape_string($con, $_POST["password"]);
$cpassword = mysqli_real_escape_string($con, $_POST["cpassword"]);
function generateUID()
{
    return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyz"), 0, 8);
}
$uniqid = mysqli_real_escape_string($con, generateUID());
$fname = mysqli_real_escape_string($con, $_POST["fname"]);
$lname = mysqli_real_escape_string($con, $_POST["lname"]);
$email = mysqli_real_escape_string($con, $_POST["email"]);
$uaddress = mysqli_real_escape_string($con, $_POST["address"]);
$phonenumber = mysqli_real_escape_string($con, $_POST["phonenumber"]);
$role_as = mysqli_real_escape_string($con, $_POST["role_as"]);


// echo $email;
if ($password == $cpassword) {
    $query = "SELECT * FROM " . ($role_as == "0" ? "user" : "tattooshops") . " WHERE email='$email'";
    $res = $con->query($query);
    if (mysqli_num_rows($res) > 0) {
        echo -1; //email already registered
    } else {
        $shopid = 0;
        if ($role_as == "1" || $role_as == "3") {
            //tattooshop logo
            $targetFile = "uploads/" . basename($_FILES["fileData"]["name"]);
            $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
            $newFileName = $_POST["shopname_"] . "." . $fileType;
            move_uploaded_file($_FILES["fileData"]["tmp_name"], "uploads/" . $newFileName);

            
            $addShop = $con->query("INSERT INTO `tattooshops` (
                `name`, 
                `email`, 
                `contact`,  
                `location`, 
                `map`, 
                `image`,
                `description`) 
            VALUES 
            (
                '" . mysqli_real_escape_string($con, $_POST["shopname_"]) . "',
                '" . $email . "',
                '" . $phonenumber . "',
                '" . mysqli_real_escape_string($con, $_POST["address"]) . "',
                '" . mysqli_real_escape_string($con, $_POST["map"]) . "',
                '" . mysqli_real_escape_string($con,$newFileName) . "',
                '".mysqli_real_escape_string($con,$_POST["descr"])."'
            )");
            //get latest tattooshop id
            $r = $con->query("SELECT MAX(id) as id FROM tattooshops");
            $row1 = $r->fetch_assoc();
            $shopid = $row1['id'];

            //insert schedules
            $day_time = json_decode(stripslashes($_POST["times"]));
            $dx = count($day_time);
            foreach ($day_time as $dt) {
                if($dx > 1){
                    if($dt->id != "0") {
                        $con->query("INSERT INTO `schedule`(`shopid`, `day_`, `from_`,`to_`) VALUES (".$shopid.",'".mysqli_real_escape_string($con, $dt->id)."','" .mysqli_real_escape_string($con, $dt->from)."','" .mysqli_real_escape_string($con, $dt->to)."')");
                    }
                } else {
                        $con->query("INSERT INTO `schedule`(`shopid`, `day_`, `from_`,`to_`) VALUES (".$shopid.",'".mysqli_real_escape_string($con, $dt->id)."','" .mysqli_real_escape_string($con, $dt->from)."','" .mysqli_real_escape_string($con, $dt->to)."')");
                }
                
            }
             //tattooshop logo
             $targetFile = "uploads/" . basename($_FILES["fileData"]["name"]);
             $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
             $newFileName = $_POST["shopname_"] . "." . $fileType;
             move_uploaded_file($_FILES["fileData"]["tmp_name"], "uploads/" . $newFileName);


            //tattoo shop works
            $workPath = "uploads/works/".$shopid;
            if (!file_exists($workPath)) {
                mkdir($workPath, 0700);
            }
            // $c = count($_FILES["shopwork"]["name"]);
            for($b = 0; $b < (int)$_POST["worksC"]; $b++){
                $workFileName = $workPath."/".basename($_FILES["shopwork".$b]["name"]);
                $filewrkType = strtolower(pathinfo($workFileName, PATHINFO_EXTENSION));
                // $workFname = $_POST["shopname_"] . "." . $filewrkType;
                move_uploaded_file($_FILES["shopwork".$b]["tmp_name"], $workFileName);
            }
            //insert services
            $services_ = json_decode(stripslashes($_POST["services"]));
            foreach($services_ as $serv){
                $servRes = $con->query("INSERT INTO `services`(`type_services`, `estimated_amount`, `shopid`) VALUES ('".mysqli_real_escape_string($con, $serv->servName)."','".mysqli_real_escape_string($con, $serv->servPrice)."',".$shopid.")");
            }
        }

        $con->query("INSERT INTO user (unique_id,fname,lname,email,password,phonenumber,role_as,approved,shopid) VALUES ('$uniqid','$fname','$lname','$email','" . password_hash($password, PASSWORD_DEFAULT) . "','$phonenumber','$role_as',0," . $shopid . ")");
        if ($con->affected_rows > 0) {
            $res = $con->query("SELECT id, unique_id FROM user WHERE email='$email'");
            $row = $res->fetch_assoc();
            $_SESSION["userId"] = $row["id"]; //ID TO BE USED THROUGHOUT THE SITE
            $_SESSION["uniqueId"] = $row["unique_id"]; // unique ID TO BE USED on chat
            echo 1;
        } else {
            echo -2; //did not saved
        }
    }
} else {
    echo 0; //password do not match
}


?>