<?php
include('authentication.php');
include('includes/header.php');
?>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
    body
    {
        font-family: 'Poppins', sans-serif;
    }
    a:hover{
        background-color: none;
    }
</style>

<div class="container-fluid px-4" style="margin-right: 20%">
    <h1 class="mt-4">Admin Panel:&nbsp;
    <?php
    $re = $con->query("SELECT * FROM `user` u left join tattooshops t on u.shopid=t.id WHERe u.id=".$_SESSION["userId"]."");

    $row7 = $re->fetch_assoc();
    echo $row7["name"];
    ?>
    </h1>
    <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <?php include('message.php'); ?>
    <div class="row">
    <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body">Pending Accounts
                                    <?php
                                        $dash_user_query = "SELECT * FROM user WHERE approved = 0";
                                        $dash_user_query_run = mysqli_query($con, $dash_user_query);

                                        if($user_total = mysqli_num_rows($dash_user_query_run))
                                        {
                                            echo '<h4 class="mb-0"> '.$user_total.' </h4>';
                                        }
                                        else
                                        {
                                            echo '<h4 class="mb-0">No Data</h4>';
                                        }
                                        ?>               
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="pendingreq.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
        <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body">Total Tattoo Shop
                                    <?php
                                        $dash_user_query = "SELECT * FROM tattooshops";
                                        $dash_user_query_run = mysqli_query($con, $dash_user_query);

                                        if($user_total = mysqli_num_rows($dash_user_query_run))
                                        {
                                            echo '<h4 class="mb-0"> '.$user_total.' </h4>';
                                        }
                                        else
                                        {
                                            echo '<h4 class="mb-0">No Data</h4>';
                                        }
                                        ?>               
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="tattooshops.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body">Total Freelance Artist
                                    <?php
                                        $dash_user_query = "SELECT * FROM user WHERE role_as = 3";
                                        $dash_user_query_run = mysqli_query($con, $dash_user_query);

                                        if($user_total = mysqli_num_rows($dash_user_query_run))
                                        {
                                            echo '<h4 class="mb-0"> '.$user_total.' </h4>';
                                        }
                                        else
                                        {
                                            echo '<h4 class="mb-0">No Data</h4>';
                                        }
                                        ?>   
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="freelance.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
        </div>
        <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body">Total Admin
                                    <?php
                                        $dash_user_query = "SELECT * FROM user WHERE role_as = 2";
                                        $dash_user_query_run = mysqli_query($con, $dash_user_query);

                                        if($user_total = mysqli_num_rows($dash_user_query_run))
                                        {
                                            echo '<h4 class="mb-0"> '.$user_total.' </h4>';
                                        }
                                        else
                                        {
                                            echo '<h4 class="mb-0">No Data</h4>';
                                        }
                                        ?>   
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="adminregister.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
        </div>
        <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body">Total Users  
                                    <?php
                                        $dash_user_query = "SELECT * FROM user";
                                        $dash_user_query_run = mysqli_query($con, $dash_user_query);

                                        if($user_total = mysqli_num_rows($dash_user_query_run))
                                        {
                                            echo '<h4 class="mb-0"> '.$user_total.' </h4>';
                                        }
                                        else
                                        {
                                            echo '<h4 class="mb-0">No Data</h4>';
                                        }
                                        ?>  
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="registereduser.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
        </div>
        <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body">Total Announcements  
                                    <?php
                                        $dash_user_query = "SELECT * FROM announcements ";
                                        $dash_user_query_run = mysqli_query($con, $dash_user_query);

                                        if($announce_total = mysqli_num_rows($dash_user_query_run))
                                        {
                                            echo '<h4 class="mb-0"> '.$announce_total.' </h4>';
                                        }
                                        else
                                        {
                                            echo '<h4 class="mb-0">No Data</h4>';
                                        }
                                        ?>  
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="announce.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
        </div>
        <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body">Total Appointments  
                                    <?php
                                        $dash_user_query = "SELECT * FROM appointment ";
                                        $dash_user_query_run = mysqli_query($con, $dash_user_query);

                                        if($announce_total = mysqli_num_rows($dash_user_query_run))
                                        {
                                            echo '<h4 class="mb-0"> '.$announce_total.' </h4>';
                                        }
                                        else
                                        {
                                            echo '<h4 class="mb-0">No Data</h4>';
                                        }
                                        ?>  
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="appointment.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
        </div>
        <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body">Ratings 
                                    <?php
                                        $dash_user_query = "SELECT * FROM review_table ";
                                        $dash_user_query_run = mysqli_query($con, $dash_user_query);

                                        if($stars_total = mysqli_num_rows($dash_user_query_run))
                                        {
                                            echo '<h4 class="mb-0"> '.$stars_total.' </h4>';
                                        }
                                        else
                                        {
                                            echo '<h4 class="mb-0">No Data</h4>';
                                        }
                                        ?>  
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="ratings_view.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
        </div>
     
    </div>
</div>

<?php
include('includes/footer.php');
include('includes/scripts.php');
?>