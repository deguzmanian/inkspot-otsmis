<?php
session_start();
include('admin/config/dbcon.php');

if(isset($_POST['register_btn']))
{
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phonenumber = mysqli_real_escape_string($con, $_POST['phonenumber']);
    $role_as = mysqli_real_escape_string($con, $_POST['role_as']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($con, $_POST['cpassword']);

if($password == $confirm_password)
{
    $checkemail = "SELECT email FROM user WHERE email='$email'";
    $checkemail_run = mysqli_query($con, $checkemail);

    if(mysqli_num_rows($checkemail_run) > 0)
    {
        $_SESSION['message'] = "Email Already Exists";
    header("Location: register.php"); 
    exit(0);
    }
    else
    {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $user_query = "INSERT INTO user (fname,lname,email,password,phonenumber,role_as) VALUES ('$fname','$lname','$email','$hash','$phonenumber','$role_as')";
        $user_query_run = mysqli_query($con, $user_query);

        if($user_query_run)
        {
            $_SESSION['message'] = "Registered Successfully";
            header("Location: login.php");
            exit(0);
        }
        else
        {
            $_SESSION['message'] = "Something went wrong!";
            header("Location: register.php");
            exit(0);
        }
    }
}
else
    {
    $_SESSION['message'] = "Password and Confirm Password does not Match";
    header("Location: register.php");
    exit(0);
    }
}
else
    {
    header("Location: register.php");
    exit(0);
    }

?>