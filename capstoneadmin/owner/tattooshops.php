<?php
include('authentication.php');
include('includes/header.php');
?>




<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Tattoo Shops</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     <form action="tattoocode.php" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
            <div class="mb-3 center">
                <label>Name</label>
                <input type="text" name="shop_name" class="form-control" placeholder="Enter Tattoo Shop Name" required>
            </div>

            <div class="mb-3">
                <label>Description</label>
                <input type="text" name="shop_description" class="form-control" placeholder="Enter Tattoo Shop Description" required>
            </div>

            <div class="mb-3">
                <label>Location</label>
                <input type="text" name="shop_location" class="form-control" placeholder="Enter Tattoo Shop Location" required>
            </div>

            <div class="mb-3">
                <label> Upload Image</label>
                <input type="file" name="shop_images" id="shop_images" class="form-control" required>
            </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="tattoo_save" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="container-fluid">
    <h4 class="mt-4 fixed">Tattoo Shops</h4>
   
    <div class="card shadow mb-4">


            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Shops
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    ADD
                </button>
                </h6>
            </div>
            <div class="card-body">
                <?php
                if(isset($_SESSION['success']) && $_SESSION['success'] !='')
                {
                    echo '<h2 class="bg-primary text-white"> ' .$_SESSION['success']. ' </h2>';
                    unset($_SESSION['success']);
                }
                if(isset($_SESSION['status']) && $_SESSION['status'] !='')
                {
                    echo '<h2 class="bg-danger text-white"> ' .$_SESSION['status']. ' </h2>';
                    unset($_SESSION['status']);
                }

                ?>
                <div class="table-responsive">
                    
                <?php
                    $query = "SELECT * FROM tattooshops";
                    $query_run = mysqli_query($con, $query);

                    if(mysqli_num_rows($query_run) > 0)
                    {   
                ?>

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Location</th>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <?php
                        while($row = mysqli_fetch_assoc($query_run))
                        {
                    ?>
                    
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['description'] ?></td>
                            <td><?php echo $row['location'] ?></td>
                            <td><?php echo '<img src="../uploads/'.$row['image'].'" width="170px;" height="120px;"  alt="Tattoo Shops">'?> </td>
                            <td>
                                <form action="shop-edit.php" method="POST">
                                    <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">
                                    <button type="submit" name="edit_data_btn" class="btn btn-success"> EDIT </button>
                                </form>
                            </td>
                            <td>
                                <form action="tattoocode.php" method="POST">
                                    <input type="hidden" name="delete_id" value="<?php echo $row['id'] ?>">
                                    <button type="submit" name="shop_delete_btn" class="btn btn-danger">DELETE</button>                                 
                                </form> 
                            </td>
                        </tr>
                    <?php            
                        }
                    ?>
                        
                            </tbody>
                            </table>

                    <?php
                        }
                        else
                        {
                            echo "No record found";
                        }



                    ?>



    </div>
</div>
</div>

<?php
include('includes/footer.php');
include('includes/scripts.php');
?>