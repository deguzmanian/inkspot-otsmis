<?php
session_start();


include('includes/header.php');
include('includes/navbar.php');
?>

<div class="py-5">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">

        <?php include('message.php'); ?>

        <div class="card">
            <div class="card-header">
                <h4>Tattoo Shops</h4>
            </div>
            <div class="card-body">

            <form action="tattoocode.php" method="POST">
                <div class="form-group mb-3">
                    <label>Name</label>
                    <input required type="text" name="name" placeholder="Enter tattoo shop name" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label>Description</label>
                    <input required type="text" name="lname" placeholder="Description" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label>Location</label>
                    <input required type="email" name="email" placeholder="Location" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <button type="submit" name="register_btn" class="btn btn-primary">Save</button>
                    </div>
            </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<?php
include('includes/footer.php');
?>