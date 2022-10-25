<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<?php
include('authentication.php');
include('includes/header.php');
?>




<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Tattoo Shops/Artist</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     <form action="file_upload.php" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
            <div class="mb-3 center">
                <label>Shop Name</label>
                <input type="text" name="shop_name" class="form-control" placeholder="Shop Name" required>
            </div>

            <div class="mb-3">
                <label>Image</label>
				<input type="file" name="image[]" class="form-control" multiple />
            </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="submit" class="btn btn-primary">Upload</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="container-fluid" >
    <h4 class="mt-4 fixed">Tattoo Shop/Artist Design and Works</h4>
   
    <div class="card shadow mb-4">


            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Works
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
                    $query = "SELECT * FROM works";
                    $query_run = mysqli_query($con, $query);

                    if(mysqli_num_rows($query_run) > 0)
                    {   
                ?>

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Shop Name</th>
                        <th>Image</th>
                        
                    </tr>
                </thead>
                <?php
                        while($row = mysqli_fetch_assoc($query_run))
                        {
                    ?>
                    
                        <tr>
                            <td><?php echo $row['design_id'] ?></td>
                            <td><?php echo $row['shopname'] ?></td>
							<td><?php echo $row['image'] ?></td>
                        
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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>