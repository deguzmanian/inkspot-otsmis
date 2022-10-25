<?php
session_start();
include('admin/config/dbcon.php');
 
if(isset($_POST['login_btn']))
{
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    

    $login_query = "SELECT * FROM user WHERE email='$email'";
    // $login_query_run = mysqli_query($con, $login_query);
    $res = $con->query($login_query);
   
    if(/*mysqli_num_rows($login_query_run) > 0*/mysqli_num_rows($res) > 0)
    {
        $row = $res->fetch_assoc();
        if(password_verify($password, $row['password'])){
            $msg = "correct password";
        }else
        {
            $msg = "check your inputs";
        }
      
        $user_id = $row['id'];
        $user_name = $row['fname'].' '.$row['lname'];
        $user_email = $row['email'];
        $user_phonenumber = $row['phonenumber'];
        $role_as = $row['role_as'];
        $_SESSION["userId"] = $row["id"];
        // foreach($login_query_run as $data){

        //     if(password_verify($password, $data['password'])){
        //         $msg = "correct password";
        //     }else
        //     {
        //         $msg = "check your inputs";
        //     }
          
        //     $user_id = $data['id'];
        //     $user_name = $data['fname'].' '.$data['lname'];
        //     $user_email = $data['email'];
        //     $user_phonenumber = $data['phonenumber'];
        //     $role_as = $data['role_as'];
        // }

        $_SESSION['auth'] = true;
        $_SESSION['auth_role'] = "$role_as"; //1-owner, 0-user, 2-superadmin
        $_SESSION['auth_user'] = [
            'user_id'=>$user_id,
            'user_name'=>$user_name,
            'user_email'=>$user_email,
        ];

        if($_SESSION['auth_role'] == '1') //1=owner
        {
                $_SESSION['message'] = "Welcome to Dashboard".$_SESSION["userId"];
                header("Location: admin/index.php");
                exit(0);
            
        }
        if($_SESSION['auth_role'] == '2') //1=superadmin
        {
            $_SESSION['message'] = "Welcome to Dashboard";
            header("Location: admin/index.php");
            exit(0);
        }
       
      
        elseif($_SESSION['auth_role'] == '0') //0=user
        {
            $_SESSION['message'] = "You are Logged In";
            header("Location: userindex.php");
            exit(0);
        }
        else
        {
            $_SESSION['message'] = "You are Logged In";
            header("Location: userindex.php");
            exit(0);
        }

     
        
    }
    else
    {
    $_SESSION['message'] = "Invalid Email or Password";
    header("Location: login.php");
    exit(0); 
    }


}
else
{
    $_SESSION['message'] = "You are not allowed to access this file";
    header("Location: login.php");
    exit(0);
}





?>