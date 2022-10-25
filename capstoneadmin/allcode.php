<?php
session_start();
session_destroy();

if(isset($_POST['logout_btn']))
{
    unset($_SESSION['auth']);
    unset($_SESSION['auth_role']);
    unset($_SESSION['auth_user']);

    $_SESSION['message'] = "Logged out Successfully";
    header("Location: login.php");
    exit(0);
}





?>