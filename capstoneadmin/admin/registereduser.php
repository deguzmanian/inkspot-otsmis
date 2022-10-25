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
</style>
<div class="container-fluid px-4">
    <h4 class="mt-4">Users</h4>
    <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Dashboard</li>
    <li class="breadcrumb-item">Users</li>
    </ol>
    <div class="row">

    <div class="col-md-12">
        <?php include('message.php'); ?>
        <div class="card">

            <div class="card-header">
                <h4>REGISTERED USERS
                    <select class="float-end" id="sel-filter" style="font-family: 'Poppins', sans-serif;">
                    <option value="" style="font-family: 'Poppins', sans-serif; font-size: 20px">All</option>
                        <option value="2" style="font-family: 'Poppins', sans-serif; font-size: 20px">Super Admin</option>
                        <option value="0" style="font-family: 'Poppins', sans-serif; font-size: 20px">Customer/Clients</option>
                        <option value="1" style="font-family: 'Poppins', sans-serif; font-size: 20px">Tattoo Shop</option>
                        <option value="3" style="font-family: 'Poppins', sans-serif; font-size: 20px">Freelance artist</option>
                    </select>
                    
                </h4>              
            </div>
            <div class="card-body">

            <table class="table table-bordered">
                <thread>
                    <tr style="background-color: #FFB200; text-align: center">
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>User Type</th>
                        <!--
                        <th>Edit</th>
         
                        <th>Delete</th> -->
                    </tr>
                </thread>
                <tbody id="t-d">
                   
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
<script src="jquery-3.6.0.js"></script>
<script src="registereduser.js" defer></script>
