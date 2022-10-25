<?php
include('authentication.php');
include('includes/header.php');
?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
    body
    {
        font-family: 'Poppins', sans-serif;
    }
</style>


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Tattoo Shops/Artist</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     <form action="tattoocode.php" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
            <div class="mb-3 center">
                <label>Name</label>
                <input type="text" name="shop_name" class="form-control" placeholder="Shop Name" required>
            </div>

            <div class="mb-3">
                <label>Email</label>
                <input type="text" name="shop_email" class="form-control" placeholder="Email" required>
            </div>

            <div class="mb-3">
                <label>Contact Number</label>
                <input type="text" name="shop_number" class="form-control" placeholder="Contact Number" required>
            </div>
            <div class="mb-3">
                <label>Available Schedule</label>
                <input type="text" name="shop_schedule" class="form-control" placeholder="Available Schedule" required>
            </div>

            <div class="mb-3">
                <label>Followers</label>
                <input type="text" name="shop_followers" class="form-control" placeholder="Followers" required>
            </div>

            <div class="mb-3">
                <label>Description</label>
                <input type="text" name="shop_description" class="form-control" placeholder="Description" required>
            </div>

            <div class="mb-3">
                <label>Location</label>
                <input type="text" name="shop_location" class="form-control" placeholder="Location" required>
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

<div class="container-fluid" >
    <h3 class="mt-4 fixed" style="font-weight: bold">TATTOO SHOP AND FREELANCE ARTIST</h3>
   <br />
    <div class="card shadow mb-4">

    <input type="text" class="form-control" id="live-search" autocomplete="off" placeholder="Search shops" style="width: 23%; margin-left: 77%; border: 1px solid #FFB200">
    <br />

                <div class="table-responsive">

                <div id="searchresult">

</div>

                    
                <?php
                    $query = "SELECT * FROM tattooshops";
                    $query_run = mysqli_query($con, $query);

                    if(mysqli_num_rows($query_run) > 0)
                    {   
                ?>

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                
                <thead>
                    <tr style="background-color: #FFB200; text-align: center">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact Number</th>
                        <th>Description</th>
                        <th>Location</th>
                        <th>Image</th>
                        <!--
                        <?php if( $_SESSION['auth_role'] == '2') : ?>
                        <th>Update</th>
                        <th>Delete</th>
                        <?php endif; ?>
                        -->
                    </tr>
                </thead>
                <?php
                        while($row = mysqli_fetch_assoc($query_run))
                        {
                    ?>
                    
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['contact'] ?></td>
                            <td><?php echo $row['description'] ?></td>
                            <td><?php echo $row['location'] ?></td>

                            <td><?php echo '<img src="../uploads/'.$row['image'].'" width="80px;" height="80px;"  alt="Tattoo Shops">'?> </td>
                            <?php if( $_SESSION['auth_role'] == '2') : ?>
                            <!--<td>
                                <form action="shop-edit.php" method="POST">
                                    <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">
                                    <button type="submit" name="edit_data_btn" class="btn btn-success"> UPDATE </button>
                                </form>
                            </td>
                            <?php endif; ?>
                            <?php if( $_SESSION['auth_role'] == '2') : ?>
                            <td>
                                <form action="tattoocode.php" method="POST">
                                    <input type="hidden" name="delete_id" value="<?php echo $row['id'] ?>">
                                    <button type="submit" name="shop_delete_btn" class="btn btn-danger">DELETE</button>                                 
                                </form> 
                            </td>
                            <?php endif; ?>
                            -->
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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $("#live-search").keyup(function(){

            var input = $(this).val();
            //alert(input);

            if(input != ""){
                $.ajax({
                    url:"livesearch.php",
                    method: "POST",
                    data:{input:input},

                    success:function(data){
                        $("#searchresult").html(data);
                    }

                });
            }else{
                $("#searchresult").css("display","none");
            }
        });
    })
</script>






<?php
include('includes/footer.php');
include('includes/scripts.php');
?>