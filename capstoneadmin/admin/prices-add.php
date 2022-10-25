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
                <a href="prices.php" class="btn btn-success float-end">View Prices</a>
                </h4>
            </div>
                <div class="card-body">

                <form action="code.php" method="POST">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                        <label for="color">Choose a Color:</label>
                            <select name="color" id="color">
                                <option value="With Color">With Color</option>
                                <option value="Plain Black">Plain Black</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                        <label for="color">Choose a Size:</label>
                            <select name="size" id="size">
                                <option value="Small">Small</option>
                                <option value="2x3">2x3 Inch</option>
                                <option value="Medium">Medium</option>
                                <option value="Large">Large</option>
                                <option value="Full Sleeve">Full Sleeve</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Artist Fee</label>
                            <input type="text" name="add_artistfee" placeholder="Artist Fee" class="form-control" Required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Total</label>
                            <input type="text" name="add_total"  placeholder="Total" class="form-control" Required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <button type="submit" name="save_prices" class="btn btn-primary">Add Prices</button>
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