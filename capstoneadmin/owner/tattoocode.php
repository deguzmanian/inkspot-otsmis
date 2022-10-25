
<?php
session_start();
include('config/dbcon.php');

  if(isset($_POST['tattoo_save']))
  {
      $name = $_POST['shop_name'];
      $description = $_POST['shop_description'];
      $location = $_POST['shop_location'];
      $image = $_FILES["shop_images"]['name'];

      if(file_exists("../uploads/" .$_FILES["shop_images"]["name"]))
      {
            $store = $_FILES["shop_images"]["name"];
            $_SESSION['status']= "Image already existed. '.$store.'";
            header('Location: tattooshops.php');
      }
      else
      {
          $query = "INSERT INTO tattooshops (name,description,location,image) VALUES ('$name','$description','$location','$image')";
          $query_run = mysqli_query($con, $query);


            if($query_run)
            {
                    move_uploaded_file($_FILES["shop_images"]["tmp_name"], "../uploads/".$_FILES["shop_images"]["name"]);
                    $_SESSION['success'] = "Tattoo Shop Added";
                    header('Location: tattooshops.php');
            }
            else{
                $_SESSION['success'] = "Tattoo Shop Not Added";
                header('Location: tattooshops.php');
            }
  }
}

if(isset($_POST['shops_update_btn']))
{
    $edit_id = $_POST['edit_id'];
    $edit_name = $_POST['edit_name'];
    $edit_description = $_POST['edit_description'];
    $edit_location = $_POST['edit_location'];
    $edit_shop_images = $_FILES["shop_images"]['name'];

    $tattoo_query = "SELECT * FROM tattooshops WHERE id='$edit_id' ";
    $tattoo_query_run = mysqli_query($con, $tattoo_query);

   $query = "UPDATE tattooshops SET name='$edit_name', description='$edit_description', location='$edit_location', image='$edit_shop_images' WHERE id='$edit_id'"; 
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
      move_uploaded_file($_FILES["shop_images"]["tmp_name"], "../uploads/".$_FILES["shop_images"]["name"]);
      $_SESSION['success'] = "Tattoo Shop Updated";
      header('Location: tattooshops.php');
    }
    else
  {
      $_SESSION['success'] = "Tattoo Shop Not Updated";
      header('Location: tattooshops.php');
    }
}
     
if(isset($_POST['shop_delete_btn']))
{
  $id = $_POST['delete_id'];

  $query = "DELETE FROM tattooshops WHERE id='$id' ";
  $query_run = mysqli_query($con, $query);

  if($query_run)
  {
    $_SESSION['success'] = "Tattoo Shop Deleted Successfully";
    header("Location: tattooshops.php");

  }
  else
  {
    $_SESSION['status'] = "Tattoo Shop Deleted Successfully";
    header("Location: tattooshops.php");
  }

}
?>