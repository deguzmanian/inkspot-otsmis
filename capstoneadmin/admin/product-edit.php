<?php
include('authentication.php');
include('includes/header.php');
?>

<div class="container-fluid px-4">
    <h4 class="mt-4">Update Stock Products of Tattoo Shop</h4>
    <div class="row">

    <div class="col-md-12">
        <?php include('message.php'); ?>
        <div class="card">
            <div class="card-body">

            <?php

            $con = mysqli_connect("localhost","root","","tattoo_db");
           
           if(isset($_POST['update_supply']))
            {
                $id = $_POST['update_id'];
               
                $query = "SELECT * FROM tattoo_products WHERE id='$id' ";
                $query_run = mysqli_query($con, $query);

                foreach($query_run as $row)
                {
                    ?>

        <form action="code.php" method="POST">
            <input type="hidden" name="edit_id" value="<?php echo $row['id']?>">
             <div class="form-group">
                <label>Shop Name</label>
                <input type="text" name="edit_sName" class="form-control" value="<?php echo $row['shopname']?>" placeholder="Enter Tattoo Shop Name" required>
            </div>

            <div class="col-md-6 mb-3">
                        <label for="equipment">Equipment Name</label>
                            <select name="equipment" id="edit_equipment">
                                <option value="Small">Ink</option>
                                <option value="2x3">Needles</option>
                                <option value="Medium">Soldering Gun</option>
                                <option value="Large">Stainless Solder</option>
                                <option value="Full Sleeve">Flat and Round Tubes</option>
                                <option value="Medium">Rubber Nipples</option>
                                <option value="Large">Grip</option>
                                <option value="Full Sleeve">Tweezers</option>
                            </select>
                        </div>
            <div class="col-md-6 mb-3">
                        <label for="inkcolor">Ink Color:</label>
                            <select name="inkcolor" id="edit_inkcolor">
                                <option value="Small">--</option>
                                <option value="Small">Snow White Opaque</option>
                                <option value="2x3">Snow White Mixing </option>
                                <option value="Medium">Lemon Yellow</option>
                                <option value="Large">Golden Yellow</option>
                                <option value="Full Sleeve">Soft Orange</option>
                                <option value="Full Sleeve">Hard Orange</option>
                                <option value="2x3">Bright Red </option>
                                <option value="Medium">Dark Red</option>
                                <option value="Large">Golden Yellow</option>
                                <option value="Full Sleeve">True Magenta</option>
                                <option value="Full Sleeve">Light Magenta</option>
                                <option value="2x3">Light Purple </option>
                                <option value="Medium">Dark Purple</option>
                                <option value="Large">Mario's Blue</option>
                                <option value="Full Sleeve">Mario's Light Blue </option>
                                <option value="Full Sleeve">Light Green</option>
                                <option value="Medium">Dark Green</option>
                                <option value="Large">Dark Brown</option>
                                <option value="Full Sleeve">Light Brown </option>
                                <option value="Full Sleeve">True Black</option>
                            </select>
                        </div>
            <div class="form-group">
                <label>Brand</label>
                <input type="text" name="edit_brand" class="form-control" value="<?php echo $row['brand']?>" placeholder="Tattoo Shop Event" required>
            </div>

            <div class="form-group">
                <label>Stocks</label>
                <input type="number" name="edit_stocks" class="form-control" value="<?php echo $row['stocks']?>" placeholder="Tattoo Shop Event" required>
            </div>

            <div class="form-group">
                <label>Date</label>
                <input type="date" name="edit_supplyDate" class="form-control" value="<?php echo $row['date_added']?>" placeholder="Enter Date and Time" required>
            </div>
            <div>
                <a href="inventories.php" class="btn btn-danger">Cancel</a></button>
                <button type="submit" name="update_supply" class="btn btn-primary">Update</button>
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