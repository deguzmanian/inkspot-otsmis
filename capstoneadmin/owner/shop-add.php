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

                <form action="tattoocode.php" method="POST">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" placeholder="Enter Tattoo Shop Name" class="form-control" Required>
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