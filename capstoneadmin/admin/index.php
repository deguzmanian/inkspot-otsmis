<?php

include('authentication.php');
if($_SESSION['auth_role'] == '2'){
    header('Location: ../admin/pendingreq.php');
} 

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
    }

    #in-serv {
        flex: 2;
    }

    #in-price {
        flex: 1;
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
        padding: 0 30px;
    }
    .d5rf {
    display: flex;
    flex-direction: row;
    column-gap: 50px;
    /* justify-content: space-around; */
}
.d5rf > div {
flex:1;
}
.prods {
    flex-direction: column;
}
div#services-container,#prods-container {
    min-height: 400px;
}
</style>
<div class="container-fluid px-4" style="margin-right: 20%">

    <?php include('message.php'); ?>

</div>
<div class="shop-infoss">
    <div class="sec-div">
        <div class="sec_tit">Schedules</div>
        <div class="sec_cont">
            <div class='day_'>
                <div class='day_name'>
                    <input type='checkbox' class='chk-always' id='chk-0' onchange='SelectDay(this,`0`,`Always open`)' />
                    <span>Everyday</span>
                </div>
                <div class='day_time'>
                    <div>
                        <span>From</span>
                        <input type='time' class='form-control' id='from-0' disabled />
                    </div>
                    <div>
                        <span>To</span>
                        <input type='time' class='form-control' id='to-0' disabled />
                    </div>
                </div>
            </div>
            <?php
            $data = "";
            $days = ["Always open", "Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
            for ($i = 1; $i <= 7; $i++) {
                $dayName = $days[$i];
                $data .= "<div class='day_ d7' >
            <div class='day_name'>
                <input type='checkbox' name='dayna-" . $i . "' data-dayno='" . $i . "' class='form-control_ chk-days' id='chk-" . $i . "' onchange='SelectWkDay(this, `" . $i . "`,`" . $dayName . "`)' />
                <span>" . $dayName . "</span>
            </div>
            <div class='day_time'>
                <div>
                    <span>From</span>
                    <input type='time' name='fr' class='form-control' id='from-" . $i . "' disabled />
                </div>
                <div>
                    <span>To</span>
                    <input type='time' name='too' class='form-control' id='to-" . $i . "' disabled />
                </div>
            </div>
        </div>";
            }
            echo $data;
            ?>
            <button class="btn btn-primary" onclick="UpdateSchedule()">Apply</button>
        </div>
    </div>

    <!-- <div class="sec-div">
        <div class="sec_tit">Services and Products</div>
        <div class="sec_cont d5rf">
            <div>
                <div class="seesd">
                    <input type="text" id="in-serv" placeholder="Service name" class="form-control">
                    <input type="number" id="in-price" placeholder="Service price" class="form-control">
                    <button class="btn btn-add" id="btn-add">&plus;</button>
                </div>
                <div id="services-container">
                </div>
            </div>
            <div>
                <div class="seesd prods">
                    <label>Product name</label>
                    <input type="text" id="in-prod" class="form-control">
                    <label>Stocks</label>
                    <input type="number" id="in-stocks" class="form-control">
                    <label>Service type</label>
                    <select name="role_as" id="sel-service" class="form-control">
                    </select>
                    <button class="btn btn-add" id="btn-add-prod">&plus;</button>
                </div>
                <div id="prods-container">
                </div>
            </div>
        </div>
    </div> -->
    <script src="index.js" defer></script>
    
    <!-- <div class="sec-div">
        <div class="sec_tit">Services and Products</div>
        <div class="sec_cont"></div>
    </div> -->
</div>

<?php
// include('includes/footer.php');
include('includes/scripts.php');
?>
