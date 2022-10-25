<?php
include('authentication.php');
include('includes/header.php');
?>

<style>
    .day_ {
        display: flex;
        align-items: center;
        padding: 8px 0;
        border-top: solid 1px #d4d4d4;
        width: 500px;
    }

    .day_name {
        flex: 1;
    }

    .day_time {
        flex: 2;
    }

    .day_time>div {
        display: flex;
        align-items: center;
    }

    .day_time>div span {
        flex: 1;
        text-align: right;
        margin-right: 15px;
    }

    .day_time>div input {
        flex: 2;
    }

    #txta-descr {
        resize: vertical;
        max-height: 200px;
        min-height: 70px;
    }

    .btn-add {
        background-color: #4caf50;
        color: white;
        /* font-size: 12pt; */
    }

    .added-service {
        display: flex;
        background-color: #ebebeb;
        padding: 5px 10px;
        margin: 3px 0;
        width: 100%;
        border-radius: 5px;
        align-items: center;
    }

    .added-service:hover:not(.prod-selected) {
        cursor: pointer;
        background-color: #d6d6d6;
    }

    .prod-selected {
        background-color: #cddc39;
        /* pointer-events: none; */
    }

    .sname {
        flex: 2;
    }

    .sprice {
        flex: 1;
    }

    .remove-serv {
        border: none;
        background: none;
        font-size: 14pt;

        cursor: pointer;
    }

    .remove-serv:hover {
        color: red;
    }

    .sec-div {
        width: 100%;
    }

    .sec_tit {
        font-size: 16pt;
        margin-bottom: 10px;
        border-bottom: solid 1px #686868;
        color: #686868;
    }

    .div-not {
        background-color: wheat;
        color: #ff5722;
        padding: 5px 10px;
        /* width: 300px; */
    }

    .shop-infoss {
        display: flex;
        width: auto;
        padding: 10px 25px 50px 25px;
        flex-direction: column;
    }

    .sec_cont {
        padding: 10px 0 20px;
    }

    .d5rf {
        display: flex;
        flex-direction: row;
        column-gap: 50px;
        justify-content: space-between;
    }

    .d5rf>div {
        flex: 1;
    }

    .prods {
        flex-direction: column;
    }

    div#services-container,
    #prods-container {
        min-height: 400px;
    }
</style>
<div class="container-fluid px-4" style="margin-right: 20%">

    <?php include('message.php'); ?>

</div>
<div class="shop-infoss">

    <div class="sec-div">
        <div class="sec_tit">Services</div>
            <div class="sec_cont d5rf">
                <div class="col-md-6">
                    <input type="text" id="in-serv" placeholder="Service name" class="form-control">
                </div>
                <div class="col-md-6">
                    <input type="number" id="in-price" placeholder="Service price" class="form-control">
                </div>
                <div>
                    <button class="btn btn-add" id="btn-add">&plus;</button>
                </div>
            </div>
        </div>


    <table class="table table-bordered">
        <thread>
            <tr>
                <th>Service</th>
                <th>Price</th>
                <th>Delete</th>
            </tr>
        </thread>
        <tbody>
            <?php

            $query = "SELECT * FROM services where shopid=" . $_SESSION['shopId'] . " and void=0";
            $query_run = mysqli_query($con, $query);

            if (mysqli_num_rows($query_run) > 0) {
                foreach ($query_run as $row) {
            ?>
                    <tr>
                        <td><?= $row['type_services']; ?></td>
                        <td style="display: flex;"><input type="number" id="in-price-<?= $row['id']; ?>" class="form-control" value="<?= $row['estimated_amount']; ?>" style="width:100px;" />
                            <button class="btn btn-primary" onclick="UpdateServices('<?= $row['id']; ?>')">Update</button>
                        </td>
                        <td><button class="remove-serv" onclick="ServiceRemove(this,'<?= $row['id']; ?>')">&times;</button></td>
                    </tr>
                <?php
                }
            } else {
                ?>
                <tr>
                    <td colspan="8">No Record Found</td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <script src="services_.js" defer></script>
    <!-- <script src="index.js" defer></script> -->
    <!-- <div class="sec-div">
        <div class="sec_tit">Services and Products</div>
        <div class="sec_cont"></div>
    </div> -->
</div>

<?php
// include('includes/footer.php');
include('includes/scripts.php');
?>