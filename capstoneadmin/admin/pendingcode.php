<?php
include('authentication.php');

if(isset($_POST['deny']))
{
    $user_id = $_POST['deny'];

    $query = "DELETE FROM user WHERE id='$user_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Pending Account Denied Successfully";
        header('Location: pendingreq.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong";
        header('Location: pendingreq.php');
        exit(0);
    }
}

if(isset($_POST['approve']))
{
    $user_id = $_POST['approve'];
    $status = $_POST['pending'];
   


    $query = "UPDATE user SET status='approved' WHERE id='$user_id' "; 
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Pending Account Approved Successfully";
        header('Location: pendingreq.php');
        exit(0);
    }
}

?>
