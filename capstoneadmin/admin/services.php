<?php
include('authentication.php');
include('includes/header.php');
?>

<div class="container-fluid px-4">
    <h4 class="mt-4">Services</h4>
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
                
                    <a href="services-add.php" class="btn btn-primary float-end">Add Services</a>
                           
            </div>
            <div class="card-body">

            <table class="table table-bordered">
                <thread>
                    <tr>
                        <th>ID</th>
                        <th>Type of Services</th>
                        <th>Estimated Amount</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thread>
                <tbody>
                    <?php
                    $query = "SELECT * FROM services";
                    $query_run = mysqli_query($con, $query);

                if(mysqli_num_rows($query_run) > 0)
                {
                    foreach($query_run as $row)
                    {
                        ?>
                        <tr>
                            <td><?= $row['id']; ?></td>
                            <td><?= $row['type_services']; ?></td>
                            <td><?= $row['estimated_amount']; ?></td>
                            <td>
                                <form action="services-edit.php" method="POST">
                                    <input type="hidden" name="updateservices_id" value="<?php echo $row['id']; ?>">
                                    <button type="submit" name="update_services" class="btn btn-success">Update</button>
                                </form>

                    </td>
                        <td>
                               <form action="code.php" method="POST"> 
                                <button type="submit" name="delete_services" value="<?=$row['id'];?>" class="btn btn-danger">Delete</button>
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