<?php
session_start();

if (isset($_SESSION['auth'])) {
    $_SESSION['message'] = "You are already Logged In";
    header("Location: index.php");
    exit(0);
}

include('includes/header.php');
include('includes/navbar.php');
?>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
    body{
        font-family: 'Poppins', sans-serif;
    }
.day_ {
    display: flex;
    /* justify-content: space-evenly; */
    align-items: center;
    padding: 8px 0;
    border-top: solid 1px #d4d4d4;
    /* border: solid 1px; */
    /* border-left: none; */
    /* border-right: none; */
}
.day_name{
    flex:1;
}
.day_time {
    flex: 2;
}
.day_time > div {
    display: flex;
    align-items: center;
}
.day_time > div span {
    flex: 1;
    text-align: right;
    margin-right: 15px;
}
.day_time > div input {
flex:2;
}
#txta-descr {
    resize: vertical;
    max-height: 200px;
    min-height: 70px;
}
.seesd{
    display: flex;
}
#in-serv{
    flex:2;
}
#in-price{
    flex:1;
}
#btn-add{
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
.added-service:hover {
    cursor: pointer;
    background-color: #d6d6d6;
}
.sname{
flex:2;
}
.sprice{
flex:1;
}
.remove-serv{
    border: none;
    background: none;
    font-size: 14pt;
    
    cursor: pointer;
}
.remove-serv:hover{
    color: red;
}
</style>
<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5" style="width: 50%">

                <?php include('message.php'); ?>

                <div class="card">
                    <div class="card-header">
                        <img src="images/ink.png" style="width: 100px; height: 100px; margin-left: 40%">
                        <h4 style="text-align:center">Register</h4>
                        <div id="hahaha"></div>
                    </div>
                    <div class="card-body">

                        <!-- <form /*action="registercode.php"*/ id="form-reg" method="POST"> -->
                        <div class="form-group mb-3">
                            <label for="">User Type</label>
                            <select name="role_as" id="sel-role" required class="form-control" style="font-weight: bold;">
                                <option value="0">Customer/Client</option>
                                <option value="1">Tattoo Shop</option>
                                <option value="3">Freelance Artist</option>
                            </select>
                        </div>
                        <div class="form-group mb-3 is-shop" style="display:none;">
                            <label>Name of Shop/Name of Freelance Artist</label>
                            <input required type="text" name="shopname" placeholder="" class="form-control">
                        </div>

                        <div class="form-group mb-3 is-shop" style="display:none;">
                            <label>Logo</label>
                            <input required type="file" id="inp-logo" name="shoplogo" accept=".jpg,.jpeg,.png"  class="form-control">
                        </div>

                        <div class="form-group mb-3 is-shop" style="display:none;">
                            <label>Location</label>
                            <input required type="text" name="address" placeholder="Enter address" class="form-control">
                        </div>

                        <div class="form-group mb-3 is-shop" style="display:none;">
                            <label>Works and Designs</label>
                            <input type="file" multiple id="inp-works" name="shopworks[]" accept=".jpg,.jpeg,.png" class="form-control">
                        </div>

                        <div class="form-group mb-3 is-shop" style="display:none;">
                            <label>Description</label>
                            <textarea type="text" name="descr" placeholder="Enter shop description" class="form-control" id="txta-descr"></textarea>
                        </div>

                        <div class="form-group mb-3 is-shop sched" style="display:none;">
                            <label>Shop Schedule</label>
                            <div class='day_'>
                                <div class='day_name'>
                                    <input type='checkbox' class='chk-always' id='chk-0' onchange='SelectDay(this,`0`,`Always open`)' checked/>
                                    <span>Everyday</span>
                                </div>
                                <div class='day_time'>
                                    <div>
                                        <span>From</span>
                                        <input type='time' class='form-control' id='from-0' />
                                    </div>
                                    <div>
                                        <span>To</span>
                                        <input type='time' class='form-control' id='to-0' />
                                    </div>
                                </div>
                            </div>
                            <?php
                            $data = "";
                                $days = [
                                    "Always open",
                                    "Sunday",
                                    "Monday",
                                    "Tuesday",
                                    "Wednesday",
                                    "Thursday",
                                    "Friday",
                                    "Saturday"
                                ];
                                for($i = 1; $i <= 7; $i++){
                                    $dayName = $days[$i];
                                    $data .= "<div class='day_ d7' style='display:none;'>
                                                <div class='day_name'>
                                                    <input type='checkbox' name='dayna-".$i."' data-dayno='".$i."' class='form-control_ chk-days' id='chk-".$i."' onchange='SelectDay(this, `".$i."`,`".$dayName."`)' />
                                                    <span>".$dayName."</span>
                                                </div>
                                                <!--<div class='day_helper-' style='visibility:hidden;' >
                                                    <span>Apply to all</span>
                                                    <input type='checkbox' class='form-control_' name='apply' id='chk-apply' onchange='ApplyToAll(this,`".$i."`)' />
                                                </div>-->
                                                <div class='day_time'>
                                                    <div>
                                                        <span>From</span>
                                                        <input type='time' name='fr' class='form-control' id='from-".$i."' disabled />
                                                    </div>
                                                    <div>
                                                        <span>To</span>
                                                        <input type='time' name='too' class='form-control' id='to-".$i."' disabled />
                                                    </div>
                                                </div>
                                            </div>";
                                }
                                echo $data;
                            ?>
                        </div>

                        <div class="form-group mb-3 is-shop" style="display:none;">
                            <label>Services</label>
                            <div class="seesd">
                                <input type="text" id="in-serv" placeholder="Enter service name" class="form-control">
                                <input type="number" id="in-price" placeholder="Enter starting price" class="form-control">
                                <button class="btn" id="btn-add">&plus;</button>
                            </div>
                            <div id="services-container">
                            </div>
                        </div>

                        <div class="form-group mb-3 hd">
                            <label>
                                <!-- <div class="is-shop" style="display:none;">Owner&nbsp;</div> -->First Name
                            </label>
                            <input required type="text" name="fname" placeholder="Enter First Name" class="form-control">
                        </div>
                        <div class="form-group mb-3 hd">
                            <label>
                                <!-- <div class="is-shop" style="display:none;">Owner&nbsp;</div> -->Last Name
                            </label>
                            <input required type="text" name="lname" placeholder="Enter Last Name" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label>Email</label>
                            <input required id="input-email" type="email" name="email" placeholder="Enter Email Address" class="form-control">
                        </div>
                      
                        <div class="form-group mb-3">
                            <label>Phone Number</label>
                            <input required type="text" maxlength="11" id="in-phone" name="phonenumber" placeholder="Enter Phone Number" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label>Password</label>
                            <input required type="password" name="password" placeholder="Enter Password" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label>Confirm Password</label>
                            <input required type="password" name="cpassword" placeholder="Enter Confirm Password" class="form-control">
                        </div>
                        <div class="form-group mb-3 flb">
                            <button type="submit" id="btn-register" name="register_btn" class="btn btn-primary">Register Now</button>
                            <div id="div-alert" class="span-alert"></div>
                        </div>
                        <!-- </form> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script defer src="registercode.js"></script>

<?php
include('includes/footer.php');
?>