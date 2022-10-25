<?php
include('authentication.php');
include('includes/header.php');
?>

<div class="container-fluid px-4">
    <h4 class="mt-4">Prices</h4>
    <div class="row">
        <div class="card-body">
        <?php
                if(isset($_SESSION['success']) && $_SESSION['success'] !='')
                {
                    echo '<h2 class="bg-primary text-white"> ' .$_SESSION['success']. ' </h2>';
                    unset($_SESSION['success']);
                }
                if(isset($_SESSION['status']) && $_SESSION['status'] !='')
                {
                    echo '<h2 class="bg-danger text-white"> ' .$_SESSION['status']. ' </h2>';
                    unset($_SESSION['status']);
                }

                ?>
        </div>

    <div class="col-md-12">
        <?php include('message.php'); ?>
        <div class="card">

            <div class="card-header">
                
                    <a href="prices-add.php" class="btn btn-primary float-end">Add Prices</a>
                           
            </div>
            <div class="card-body">

            <table class="table table-bordered">
                <thread>
                    <tr>
                        <th>Prices ID</th>
                        <th>Color</th>
                        <th>Size</th>
                        <th>Artist Fee</th>
                        <th>Total</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thread>
                <tbody>
                    <?php
                    $query = "SELECT * FROM prices";
                    $query_run = mysqli_query($con, $query);

                if(mysqli_num_rows($query_run) > 0)
                {
                    foreach($query_run as $row)
                    {
                        ?>
                        <tr>
                            <td><?= $row['prices_id']; ?></td>
                            <td><?= $row['color']; ?></td>
                            <td><?= $row['size']; ?></td>
                            <td><?= $row['artist_fee']; ?></td>
                            <td><?= $row['total']; ?></td>
                            <td>
                                <form action="prices-edit.php" method="POST">
                                    <input type="hidden" name="updateprices_id" value="<?php echo $row['prices_id']; ?>">
                                    <button type="submit" name="update_prices" class="btn btn-success">Update</button>
                                </form>

                    </td>
                        <td>
                               <form action="code.php" method="POST"> 
                                <button type="submit" name="delete_prices" value="<?=$row['prices_id'];?>" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        <?php
                    }
                }
                else
                {
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

<?php
include('includes/footer.php');
include('includes/scripts.php');
?>