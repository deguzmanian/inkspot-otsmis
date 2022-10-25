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
                <h4>Add Prices
                <a href="services.php" class="btn btn-success float-end">View Prices</a>
                </h4>
            </div>
                <div class="card-body">

                <form action="code.php" method="POST">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                        <label for="">Type of Services</label>
                            <input type="text" name="add_typeservice" placeholder="Services" class="form-control" Required>
                        </div>
                        <div class="col-md-6 mb-3">
                        <label for="">Estimated Amount</label>
                            <input type="text" name="add_estamount" placeholder="Estimated Amount" class="form-control" Required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <button type="submit" name="save_services" class="btn btn-primary">Add Services</button>
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