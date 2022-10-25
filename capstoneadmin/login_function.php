<?php

session_start();
include('admin/config/dbcon.php');

$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['password']);

$res = $con->query("SELECT *,u.id as uid FROM `user` u left join tattooshops t on u.shopid=t.id where u.email='$email'");

if(mysqli_num_rows($res) > 0) {

    $row = $res->fetch_assoc();
    $role = $row["role_as"];

    if(password_verify($password, $row["password"])) {
        $_SESSION["userId"] = $row["uid"];
        $_SESSION["shopId"] = $row["shopid"];
        if($row["name"] != "") {
            $_SESSION["shopname"] = $row["name"];
        }
        if($row["unique_id"] !== ""){
            $_SESSION['unique_id'] = $row["unique_id"];
        }
        if($row["role_as"] !== ""){
            $_SESSION['role_as'] = $row["role_as"];
        }
        if($row["approved"] == "1" || $role == "2") {

            $user_id = $row['id'];
            $user_name = $row['fname'].' '.$row['lname'];
            $user_email = $row['email'];
            $user_phonenumber = $row['phonenumber'];

            
            $_SESSION['auth'] = true;
            $_SESSION['auth_role'] = "$role"; //1-owner, 0-user, 2-superadmin
            $_SESSION['auth_user'] = [
                'user_id'=>$user_id,
                'user_name'=>$user_name,
                'user_email'=>$user_email,
            ];

            $_SESSION['message'] = ($role == "0" ? "You are logged in" : "Welcome to Dashboard");
            // header("Location: {($role_as == '0' ? 'userindex.php' : 'admin/index.php')}");
            $_SESSION["fullname"] = $row['fname'].' '.$row['lname'];
            $_SESSION["contact"] = $row["phonenumber"];
            exit("0".$role);
        } else {   
            exit(($row["approved"] == "2" ? "5" : ($row["docUploaded"] != "" ? "3" : "4")).$role);                                     //0 or 1 val
            // exit(($row["docUploaded"] != "" ? "3" : "4").$role);//account pending approval
        }
    } else {
        exit("2");//incorrect pass
    }
} else {
    exit("1");//incorrect email
}
