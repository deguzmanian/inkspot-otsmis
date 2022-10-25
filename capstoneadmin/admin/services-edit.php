<?php
include('authentication.php');
include('includes/header.php');
?>

<div class="container-fluid px-4">
    <h4 class="mt-4">Edit Services</h4>
    <div class="row">

    <div class="col-md-12">
        <?php include('message.php'); ?>
        <div class="card">
            <div class="card-body">

            <?php

            $con = mysqli_connect("localhost","root","","tattoo_db");
           
           if(isset($_POST['update_services']))
            {
                $id = $_POST['updateservices_id'];
               
                $query = "SELECT * FROM services WHERE id='$id' ";
                $query_run = mysqli_query($con, $query);

                foreach($query_run as $row)
                {
                    ?>

        <form action="code.php" method="POST">
            <input type="hidden" name="edit_id" value="<?php echo $row['id']?>">
             <div class="form-group">
                <label>Services</label>
                <input type="text" name="edit_services" class="form-control" value="<?php echo $row['services']?>" placeholder="Services" required>
            </div>

            <div class="form-group">
                <label>Estimated Amount</label>
                <input type="text" name="edit_amount" class="form-control" value="<?php echo $row['estimated_amount']?>" placeholder="Estimated Amount" required>
            </div>
            <div>
                <a href="services.php" class="btn btn-danger">Cancel</a></button>
                <button type="submit" name="updateservices_btn" class="btn btn-primary">Update</button>
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