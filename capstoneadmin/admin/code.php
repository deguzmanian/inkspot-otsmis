<?php
include('authentication.php');
session_start();
if(isset($_POST['user_delete']))
{
    $user_id = $_POST['user_delete'];

    $query = "DELETE FROM user WHERE id='$user_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Admin/User Archived Successfully";
        header('Location: registereduser.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong";
        header('Location: registereduser.php');
        exit(0);
    }
}

if(isset($_POST['prod_delete']))
{
    $id = $_POST['prod_delete'];


   
    $query = "DELETE * FROM `tattoo_products` WHERE `id`= '$id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Admin/User Archived Successfully";
        header('Location: inventories.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong";
        header('Location: inventories.php');
        exit(0);
    }
}



if(isset($_POST['add_user']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $password = $_POST['password'];
    $role_as = $_POST['role_as'];
  

    $query = "INSERT INTO user (fname,lname,email,phonenumber,password,role_as) VALUES ('$fname', '$lname', '$email', '$phonenumber', '$password', '$role_as')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Admin/User Added Successfully";
        header('Location: registereduser.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong";
        header('Location: registereduser.php');
        exit(0);
    }
}






if(isset($_POST['update_user']))
{
    $user_id = $_POST['user_id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $password = $_POST['password'];
    $role_as = $_POST['role_as'];
    


    $query = "UPDATE user SET fname='$fname', lname='$lname', email='$email', phonenumber='$phonenumber', password='$password', role_as='$role_as'
               WHERE id='$user_id' "; 
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Updated Successfully";
        header('Location: registereduser.php');
        exit(0);
    }
}



if(isset($_POST['save_announce']))
{
    // $name = $_POST['add_shop'];
    $event = $_POST['add_event'];
    $date = $_POST['add_date'];
    $startTime = $_POST['add_starttime'];
    $endTime = $_POST['add_endtime'];
  

    $query = "INSERT INTO announcements (shopid, event, date, start_time, end_time) VALUES (".$_SESSION["shopId"].",'".mysqli_real_escape_string($con,$event)."','$date', '$startTime', '$endTime')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Announcement successfully added";
        header('Location: announce.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong";
        header('Location: announce.php');
        exit(0);
    }
    
    
}

if(isset($_POST['save_prices']))
{
    $color =$_POST['color'];
    $size = $_POST['size'];
    $artistFee =$_POST['add_artistfee'];
    $total = $_POST['add_total'];

  

    $query = "INSERT INTO prices (color, size, artist_fee, total) VALUES ('$color','$size','$artistFee', '$total')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Prices successfully added";
        header('Location: prices.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong";
        header('Location: prices.php');
        exit(0);
    }
    
    
}





if(isset($_POST['delete_announce']))
{
    $id = $_POST['delete_announce'];

    $query = "DELETE FROM `announcements` WHERE announce_id='$id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Announcements deleted successfully";
        header('Location: announce.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong";
        header('Location: announce.php');
        exit(0);
    }
}

if(isset($_POST['update_btn']))
{
    $id = $_POST['edit_id'];
    // $name = $_POST['edit_shopname'];
    $event = $_POST['edit_event'];
    $date = $_POST['edit_date'];
    $startTime = $_POST['edit_starttime'];
    $endTime = $_POST['edit_endtime'];

    $query = "UPDATE announcements SET event='".mysqli_real_escape_string($con,$event)."', date='$date', start_time='$startTime', end_time='$endTime' WHERE announce_id='$id' ";
   
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Announcement Updated";
        header('Location: announce.php');

    }
    else
    {
        $_SESSION['status'] = "Something went wrong";
        header('Location: announce.php');
        
    }

}

if(isset($_POST['updateprices_btn']))
{
    $id = $_POST['edit_id'];
    $artistFee = $_POST['edit_artistfee'];
    $total = $_POST['edit_total'];

    $query = "UPDATE prices SET artist_fee='$artistFee', total='$total' WHERE prices_id='$id' ";
   
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Prices Updated";
        header('Location: prices.php');

    }
    else
    {
        $_SESSION['status'] = "Something went wrong";
        header('Location: prices.php');
        
    }

}

if(isset($_POST['save_services']))
{
    $service = $_POST['add_typeservice'];
    $estimatedAmount = $_POST['add_estamount'];
    

    $query = "INSERT INTO services (type_services, estimated_amount) VALUES ('$service','$estimatedAmount')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Services successfully added";
        header('Location: services.php');
        exit(0);
    }
    else
    {
       // $_SESSION['message'] = "Something Went Wrong";
       // header('Location: services.php');
        //exit(0);
    }
    
    
}

if(isset($_POST['updateservices_btn']))
{
    $id = $_POST['edit_id'];
    $services = $_POST['edit_services'];
    $estimatedamount = $_POST['edit_amount'];

    $query = "UPDATE services SET services='$services', estimated_amount='$estimatedamount' WHERE id='$id' ";
   
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Services Updated";
        header('Location: services.php');

    }
    else
    {
        $_SESSION['status'] = "Something went wrong";
        header('Location: services.php');
        
    }

}
if(isset($_POST['delete_services']))
{
    $id = $_POST['delete_services'];

    $query = "DELETE FROM `services` WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Services deleted successfully";
        header('Location: services.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong";
        header('Location: services.php');
        exit(0);
    }
}

if(isset($_POST['delete_prices']))
{
    $id = $_POST['delete_prices'];

    $query = "DELETE FROM `prices` WHERE prices_id='$id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Prices deleted successfully";
        header('Location: prices.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong";
        header('Location: prices.php');
        exit(0);
    }
}

if(isset($_POST['save_inventory']))
{
    $sName = $_POST['add_sName'];
    $eName = $_POST['equipment'];
    $inkColor = $_POST['add_inkcolor'];
    $brand = $_POST['add_brand'];
    $stocks = $_POST['add_stocks'];
    $dateAdded = $_POST['add_supplyDate'];
  

    $query = "INSERT INTO tattoo_products (shopname, equipment_name, color, brand, stocks, date_added) VALUES ('$sName','$eName','$inkColor','$brand', '$stocks', '$dateAdded')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Products successfully added";
        header('Location: inventories.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong";
        header('Location: inventories.php');
        exit(0);
    }
    
    
}

if(isset($_POST['update_supply']))
{
    $id = $_POST['edit_id'];
    $sName = $_POST['edit_sName'];
    $eName = $_POST['edit_equipment'];
    $color = $_POST['edit_inkcolor'];
    $brand = $_POST['edit_brand'];
    $stocks = $_POST['edit_stocks'];
    $dateAdded = $_POST['edit_supplyDate'];
    $query = "UPDATE tattoo_products SET shopname='$sName', equipment_name='$eName', brand='$brand', stocks='$stocks', date_added='$dateAdded' WHERE id='$id' ";
   
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Product Updated";
        header('Location: inventories.php');

    }
    else
    {
        $_SESSION['status'] = "Something went wrong";
        header('Location: inventories.php');
        
    }

}

if(isset($_POST['delete_products']))
{
    $id = $_POST['delete_products'];

    $query = "DELETE FROM `tattoo_products` WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Product deleted successfully";
        header('Location: inventories.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong";
        header('Location: inventories.php');
        exit(0);
    }
}

if(isset($_POST['delete_productss']))
{
    $id = $_POST['delete_productss'];

    $query = "DELETE FROM `tattoo_products` WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Announcements deleted successfully";
        header('Location: inventories.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong";
        header('Location: inventories.php');
        exit(0);
    }
}
?>