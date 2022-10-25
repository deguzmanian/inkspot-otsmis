<?php
include('authentication.php');
include('includes/header.php');
?>

<div class="container-fluid px-4">
    <div class="row mt-4">
    <div class="col-md-12">

        <?php include('message.php'); ?>

        <div class="card">
            <div class="card-header">
                <h4>Add Announcements
                <a href="announce.php" class="btn btn-success float-end">View Announcements</a>
                </h4>
            </div>
                <div class="card-body">

                <form action="code.php" method="POST">
                    <div class="row">
                        <!-- <div class="col-md-6 mb-3">
                            <label for="">Shop Name</label>
                            <input type="text" name="add_shop" placeholder="Enter Tattoo Shop Name" class="form-control" Required>
                        </div> -->
                        <div class="col-md-6 mb-3">
                            <label for="">Event</label>
                            <input type="text" name="add_event" placeholder="Tattoo Shop Event" class="form-control" Required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Date</label>
                            <input type="date" name="add_date" placeholder="Date of Event" class="form-control" Required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Start Time</label>
                            <input type="time" name="add_starttime" format="h:i:s A" placeholder="Start time of Event" class="form-control" Required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">End Time</label>
                            <input type="time" name="add_endtime" format="h:i:s A" placeholder="End Time of Event" class="form-control" Required>
                        </div>

                        <div class="col-md-12 mb-3">
                            <button type="submit" name="save_announce" class="btn btn-primary">Add Announcements</button>
                        </div>

                    </div>
                </form>  

                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('includes/footer.php');
include('includes/scripts.php');
?>