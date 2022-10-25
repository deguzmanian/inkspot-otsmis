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

    .seesd {
        display: flex;
        justify-content: space-between;
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
    .prod-selected{
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
        padding: 0 0 20px;
    }
    .d5rf {
        display: flex;
        flex-direction: row;
        column-gap: 50px;
        justify-content: space-between;
    }
    .d5rf > div {
        flex:1;
    }
    .prods {
        flex-direction: column;
    }
    .row {
        padding: 10px;
        box-sizing: border-box;
    }
    .card-body {
        padding: 10px;
    }
</style>
<!--critical supply-->
<div class="row">
    <div class="mt-4 mb-0">
        <?php
            $query = "SELECT * FROM tattoo_products WHERE shopid=".$_SESSION['shopId']."";
            $query_run = mysqli_query($con,$query);
            
            $check_products = mysqli_num_rows($query_run) > 0;
            if ($check_products) {
                while($product = mysqli_fetch_array($query_run)) {
                    if($product['stocks'] == 1) {
                    echo '<div class="alert alert-warning" style="width: 50%"><p class="mb-0"><strong>REMINDER! </strong>'.$product["equipment_name"].' is nearly unavailable. Only '.$product["stocks"].' left.</p></div>';
                    }else if($product['stocks'] == 0) {
                    echo '<div class="alert alert-danger" style="width: 50%"><p class="mb-0"><strong>REMINDER! </strong>'.$product["equipment_name"].' is currently unavailable. You may want to load the stock.</p></div>';
                    } else {
                    echo "";
                    }
                }
            }
        ?>
    </div>
    </div>
    
    <br />
   <div class="chart">
           <h3 style="margin-left: 2%">Pie Chart of Products and Equipments</h3> 
            <div id="piechart" style="width: 900px; height: 500px; margin-left: 20%"></div>

        <?php
                    $query = "SELECT * FROM tattoo_products WHERE shopid=".$_SESSION['shopId']."";
                    $result = mysqli_query($con,$query);

                  


        ?>
    </div>
   
<!--end of critical supply -->

<div class="container-fluid">
    <h3 class="mt-4" style="margin-left: 2%">Inventory</h3>
    <div class="row">
        <div class="card-body">
            <div class="col-md-12">
                <?php include('message.php'); ?>
                    <div class="card">
                        <div class="card-body">
                            <div class="sec-div">
                                <div class="sec_cont">
                                    <div class="seesd prods_">
                                        <div class="col-md-4 pr-2">
                                            <input type="text" placeholder="Enter product name" id="in-prod" class="form-control">
                                        </div>
                                        <div class="col-md-4 pr-2">
                                            <input type="number" placeholder="Enter stocks" id="in-stocks" class="form-control">
                                        </div>
                                        <div class="col-md-3">
                                            <select name="role_as" id="sel-service" class="form-control">
                                            </select>
                                        </div>
                                        <div><button class="btn btn-add" id="btn-add-prod">&plus;</button></div>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-bordered">
                                <thread>
                                    <tr style="text-align:center">
                                        <th>Product</th>
                                        <th>Stocks</th>
                                        <th>Affected by service</th>
                                        <th>Status</th>
                                        <th>Date updated</th>
                                        <th>Action</th>
                                    </tr>
                                </thread>
                                <tbody>
                                    <?php
                                        $query = "SELECT *,t.id as id_ FROM tattoo_products t left join services s on t.serviceid=s.id where t.shopid=".$_SESSION['shopId']." and t.void=0";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0) {
                                            foreach($query_run as $row)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $row['equipment_name']; ?></td>
                                                    <td class="text-center"><input type="number" id="in-stocks-<?= $row['id_']; ?>" class="form-control" value="<?= $row['stocks']; ?>" style="width: 40%"/>
                                                </td>
                                                <td class="text-center"><?= $row['type_services']; ?></td>
                                              
                                                <td class="text-center">  
                                                    <?php 
                                                    if($row['stocks'] < 5)
                                                    {
                                                    ?>
                                                        <p style="background-color: #B73E3E; color: white; padding: 3px; border-radius: 10px; text-shadow: 1px 1px 2px red, 0 0 0.2em red;">Critical</p>       
                                                        <?php
                                                    }else if($row['stocks'] >= 5)
                                                    {
                                                        ?>
                                                        <p style="background-color: #5F9DF7; color: white; padding: 3px; border-radius: 10px; text-shadow:0 0 1em blue, 0 0 0.2em blue;">Normal</p>
                                                    <?php
                                                    }
                                                    ?>
                                                </td>
                                                <td class="text-center"><?= $row['date_added']; ?></td>
                                                <td class="text-center">
                                                    <button class="btn btn-primary" onclick="UpdateStocks('<?= $row['id_']; ?>')">Update</button>
                                                    <a class="btn btn-danger" onclick="DeleteConfirm()" href="remove.php?id=<?php echo $row['id_']; ?>">Delete</a>
                                                </td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                    else {
                                    ?>
                                        <tr>
                                            <td colspan="8">No Record Found</td>
                                        </tr>
                                    <?php
                                    }
                                    ?> 
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
         
          <?php
                while($stocks = mysqli_fetch_assoc($result))
                {
                    echo "['".$stocks['equipment_name']."',".$stocks['stocks']."],";
                }

            ?>
        ]);

        var options = {
          title: 'Current Products and Equipments'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

<script>
    function DeleteConfirm() {
    confirm("Are you sure to delete the record");                          }
</script>
<script src="inventories.js" defer></script>
<script src="index.js" defer></script>
<?php
    include('includes/scripts.php');
?>