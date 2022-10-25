<?php
include('authentication.php');
include('includes/header.php');
?>

<div class="container-fluid px-4">
    <h4 class="mt-4">Edit Announcements</h4>
    <div class="row">

    <div class="col-md-12">
        <?php include('message.php'); ?>
        <div class="card">
            <div class="card-body">

            <?php

            $con = mysqli_connect("localhost","root","","tattoo_db");
           
           if(isset($_POST['update_announce']))
            {
                $id = $_POST['update_id'];
               
                $query = "SELECT * FROM announcements WHERE announce_id='$id' ";
                $query_run = mysqli_query($con, $query);

                foreach($query_run as $row)
                {
                    ?>

        <form action="code.php" method="POST">
            <input type="hidden" name="edit_id" value="<?php echo $row['announce_id']?>">
             <!-- <div class="form-group">
                <label>Shop Name</label>
                <input type="text" name="edit_shopname" class="form-control" value="<?php echo $row['shopname']?>" placeholder="Enter Tattoo Shop Name" required>
            </div> -->

            <div class="form-group">
                <label>Event</label>
                <input type="text" name="edit_event" class="form-control" value="<?php echo $row['event']?>" placeholder="Tattoo Shop Event" required>
            </div>

            <div class="form-group">
                <label>Date</label>
                <input type="date" name="edit_date" class="form-control" value="<?php echo $row['date']?>" placeholder="Enter Date and Time" required>
            </div>
            <div class="form-group">
                <label>Start Time</label>
                <input type="time" name="edit_starttime" value="12:00" class="form-control" value="<?php echo $row['start_time']?>" placeholder="Start Time" required>
            </div>
            <div class="form-group">
                <label>End Time</label>
                <input type="time" name="edit_endtime" value="12:00" class="form-control" value="<?php echo $row['end_time']?>" placeholder="End Time" required>
            </div>
            <div>
                <a href="announce.php" class="btn btn-danger">Cancel</a></button>
                <button type="submit" name="update_btn" class="btn btn-primary">Update</button>
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