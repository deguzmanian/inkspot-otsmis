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
                <h4>Add Tattoo Shop
                <a href="tattooshops.php" class="btn btn-success float-end">View Tattoo Shop Record</a>
                </h4>
            </div>
                <div class="card-body">

                <form action="tattoocode.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" placeholder="Enter Tattoo Shop Name" class="form-control" Required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Email</label>
                            <input type="text" name="email" placeholder="Enter Tattoo Shop Email" class="form-control" Required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Contact Number</label>
                            <input type="text" name="number" placeholder="Enter Tattoo Shop Contact Number" class="form-control" Required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Available Schedule</label>
                            <input type="text" name="schedule" placeholder="Enter Tattoo Shop Available Schedule" class="form-control" Required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Followers</label>
                            <input type="text" name="follow" placeholder="Enter Tattoo Shop Followers" class="form-control" Required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Description</label>
                            <input type="text" name="description" placeholder="Enter Tattoo Shop Description" class="form-control" Required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Location</label>
                            <input type="text" name="location" placeholder="Enter Tattoo Shop Location" class="form-control" Required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Upload Image</label>
                            <input type="file" name="image" class="form-control" Required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Works</label>
                            <input type="file" name="works[]" class="form-control" multiple/>
                        </div>
                        <div class="col-md-12 mb-3">
                            <button type="submit" name="tattooshop_add" class="btn btn-primary">Add Tattoo Shop</button>
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