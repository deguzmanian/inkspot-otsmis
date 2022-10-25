<?php
include('authentication.php');
include('includes/header.php');
?>

<div class="container-fluid px-4">
    <h3 class="mt-4" style="font-weight: bold">ANNOUNCEMENTS</h3>
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
<?php
if($_SESSION['auth_role'] != "2") {
           echo ' <div class="card-header">
                
                    <a href="announce-add.php" class="btn btn-primary float-end">Add Announcements</a>
                           
            </div>';
}
            ?>
            <div class="card-body">

            <table class="table table-bordered">
                <thread>
                    <tr style="background-color: #FFB200; text-align: center">
                        <?php
                        if($_SESSION['auth_role'] == "2") { echo '<th>Shop ID</th>'; }
                        ?>
                        <th>Event</th>
                        <th>Date</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                      <th>Update</th>
                        <th>Delete</th> 
                    </tr>
                </thread>
                <tbody>
                    <?php
                    $t = "";
                    if($_SESSION['auth_role'] != "2"){
                        $t = "where a.shopid=".$_SESSION["shopId"]."";
                    }
                    $query = "select * from tattooshops t 
                    left join
                    announcements a on t.id = a.shopid ".$t;
                    $query_run = mysqli_query($con, $query);

                if(mysqli_num_rows($query_run) > 0)
                {
                    foreach($query_run as $row)
                    {
                        if($row['announce_id'] != "") {
                        ?>
                        
                        <tr>
                        <?php if($_SESSION['auth_role'] == "2") { echo '<td>'.$row["shopid"].'</td>'; }
                        ?>
                           
                            <td><?= $row['event']; ?></td>
                            <td><?= date ('M d, Y',strtotime($row['date'])); ?></td>
                            <td><?= date('h:i:A', strtotime($row['start_time'])); ?></td>
                            <td><?= date('h:i:A', strtotime($row['end_time'])); ?></td>
                            <td>
                        
                                <form action="announce-edit.php" method="POST">
                                    <input type="hidden" name="update_id" value="<?php echo $row['announce_id']; ?>">
                                    <button type="submit" name="update_announce" class="btn btn-success">Update</button>
                                </form>

                    </td>
                        <td>
                               <form action="code.php" method="POST"> 
                                <button type="submit" name="delete_announce" value="<?=$row['announce_id'];?>" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
               
                        </tr>
                        <?php
                        }
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