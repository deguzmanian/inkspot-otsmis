<?php
include('authentication.php');
include('includes/header.php');
?>

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Tattoo Shop/Artist</h6>

        </div>
    </div>
    <class="card-body">

        <?php
            if(isset($_POST['edit_data_btn']))
            {
                $id = $_POST['edit_id'];

                $query = "SELECT * FROM tattooshops WHERE id='$id' ";
                $query_run = mysqli_query($con, $query);

                foreach($query_run as $row)
                {
        ?>
        
       

         <form action="tattoocode.php" method="POST" enctype="multipart/form-data">

                <input type="hidden" name="edit_id" value="<?php echo $row['id']?>">

                <div class="form-group">
                    <label> Name </label>
                    <input type="text" name="edit_name" value="<?php echo $row['name']?>" class="form-control">
                </div>
                <div class="form-group">
                    <label> Description </label>
                    <input type="text" name="edit_description" value="<?php echo $row['description']?>" class="form-control">
                </div>
                <div class="form-group">
                    <label> Location </label>
                    <input type="text" name="edit_location" value="<?php echo $row['location']?>" class="form-control">
                </div> 
                <div class="form-group">
                    <label> Upload Image </label>
                    <input type="file" name="shop_images" id="shop_images" value="<?php echo $row['image']?>" class="form-control">
                </div>

                <a href="tattooshops.php" class="btn btn-danger"> CANCEL </a>
                <button type="submit" name="shops_update_btn" class="btn btn-primary"> UPDATE </button>
            </form>

        <?php
                }
            }

        ?>
           
    </div>
  
    
</div>

<?php
include('includes/footer.php');
include('includes/scripts.php');
?>