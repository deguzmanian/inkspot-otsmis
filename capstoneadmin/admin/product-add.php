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
                <h4>Add Supply of Tattoo Products
                <a href="inventories.php" class="btn btn-success float-end">View Inventory</a>
                </h4>
            </div>
                <div class="card-body">

                <form action="code.php" method="POST">
                    <div class="row">
                        <div class="col md-6" style="width: 40%">
                            <label for="">Shop Name</label>
                            <input type="text" name="add_sName" placeholder="Shop Name" class="form-control" Required>
                        </div>
                        <br />
                        <br />
                        <br />
                        <div class="col md-6" >
                        <label for="equipment">Equipment Name: </label>
                            <select name="equipment" id="equipment" style="width: 90%; height: 53%">
                                <option value="Ink">Ink</option>
                                <option value="Needles">Needles</option>
                                <option value="Soldering Gun">Soldering Gun</option>
                                <option value="Stainless Solder">Stainless Solder</option>
                                <option value="Flat and Round Tubes">Flat and Round Tubes</option>
                                <option value="Rubber Nipples">Rubber Nipples</option>
                                <option value="Grip">Grip</option>
                                <option value="Tweezers">Tweezers</option>
                            </select>
                        </div>
                        <br />
                        <br />
                        <div class="col md-6" style="width: 40%">
                        <label for="">Ink</label>
                            <input type="text" name="add_inkcolor" placeholder="-- if none" class="form-control" Required>
                        </div>
                        <br />
                        <br />
                        <div class="col md-6" style="width: 40%">
                            <label for="">Brand</label>
                            <input type="text" name="add_brand" placeholder="Brand" class="form-control" Required>
                        </div>
                        <br />
                        <br />
                        <br />
                        <div class="col md-6" style="width: 25%">
                            <label for="">Stocks</label>
                            <input type="number" name="add_stocks" placeholder="Stocks" class="form-control" Required>
                        </div>
                        <br />
                        <br />
                        <br />
                       
                        <div class="dateadded" style="width: 30%">
                            <label for="">Date Added</label>
                            <input type="date" name="add_supplyDate" placeholder="Date Added" class="form-control" Required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <button type="submit" name="save_inventory" class="btn btn-primary">Add Products</button>
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