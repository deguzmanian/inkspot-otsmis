<?php
include('authentication.php');
include('includes/header.php');
?>

<div class="container-fluid px-4">
    <h4 class="mt-4">Edit Prices</h4>
    <div class="row">

    <div class="col-md-12">
        <?php include('message.php'); ?>
        <div class="card">
            <div class="card-body">

            <?php

            $con = mysqli_connect("localhost","root","","tattoo_db");
           
           if(isset($_POST['update_prices']))
            {
                $id = $_POST['updateprices_id'];
               
                $query = "SELECT * FROM prices WHERE prices_id='$id' ";
                $query_run = mysqli_query($con, $query);

                foreach($query_run as $row)
                {
                    ?>

        <form action="code.php" method="POST">
            <input type="hidden" name="edit_id" value="<?php echo $row['prices_id']?>">
             <div class="form-group">
             <label for="color">Choose a Color:</label>
                    <select name="color" id="color">
                        <option value="With Color">With Color</option>
                        <option value="Plain Black">Plain Black</option>
                    </select>
            </div>

            <div class="form-group">
            <label for="color">Choose a Size:</label>
                            <select name="size" id="size">
                                <option value="Small">Small</option>
                                <option value="2x3">2x3 Inch</option>
                                <option value="Medium">Medium</option>
                                <option value="Large">Large</option>
                                <option value="Full Sleeve">Full Sleeve</option>
                            </select>
            </div>

            <div class="form-group">
                <label>Artist Fee</label>
                <input type="text" name="edit_artistfee" class="form-control" value="<?php echo $row['artist_fee']?>" placeholder="Artist Fee" required>
            </div>
            <div class="form-group">
                <label>Total</label>
                <input type="text" name="edit_total" class="form-control" value="<?php echo $row['total']?>" placeholder="Total" required>
            </div>
            <div>
                <a href="announce.php" class="btn btn-danger">Cancel</a></button>
                <button type="submit" name="updateprices_btn" class="btn btn-primary">Update</button>
            </div>

        </form>

      <?php
                }
            
                
            }
            

            ?>

    </div>
    </div>
</div>
</div>


<?php
include('includes/footer.php');
include('includes/scripts.php');
?>