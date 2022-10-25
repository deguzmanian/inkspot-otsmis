<?php
session_start();

if(isset($_SESSION['auth']))
{
    if(!isset($_SESSION['message'])){
    $_SESSION['message'] = "You are already Logged In";
    }
    header("Location: ../CapstoneSystem/userindex.php");
    exit(0);
}


include('includes/header.php');
include('includes/navbar.php');
?>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
    body
    {
        font-family: 'Poppins', sans-serif;
    }
</style> 
    <div class="py-5">
        <div class="container pt-5">
            <div class="row justify-content-center">
                <div class="col-md-5" >
                <?php include('message.php'); ?>

                    <div class="card-header">
                        <img src="images/ink.png" style="width: 100px; height: 100px; margin-left: 40%">
                        <h4 style="text-align:center">Login</h4>
                    </div> 
                    <div class="card-body" >
                        <div class="form-group mb-3">
                            <label>Email Address</label>
                            <input type="email" id="input-email" name="email" placeholder="Enter Email Address" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label>Password</label>
                            <input type="password" id="input-pass" name="password" placeholder="Enter Password" class="form-control">
                        </div>
                        <div class="form-group mb-3 flb">
                            <button type="submit" id="btn-login" name="login_btn" class="btn btn-primary">Login Now</button>
                            <div id="div-alert" class="span-alert"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="logincode.js" defer></script>
<?php
include('includes/footer.php');
?>