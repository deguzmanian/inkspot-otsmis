<?php include('includes/header.php'); ?>

<?php

include('admin/config/dbcon.php');
session_start();
$shopID = $_POST["shopid"];
$shopName = $_POST["name_"];

$_SESSION["shopid"] = $shopID;
$_SESSION["name_"] = $shopName;
?>
<!DOCTYPE html>
<html lang="en">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

    * {
        font-family: 'Poppins', sans-serif;
    }

    *::selection {
        background: var(--yellow);
        color: #333;
    }

    html {
        font-size: 62.5%;
        overflow-x: hidden;
    }
    body {
        background: white;
        overflow-x: hidden;
        padding-left: 35rem;
    }

    section {
        padding: 1rem;
    }

    header {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1000;
        height: 100%;
        width: 30rem;
        background: white;
        display: flex;
        border-style: solid;
        align-items: center;
        justify-content: center;
        flex-flow: column;
        text-align: center;
        font-size: 15px;
    }
    .card-announce {
        position: fixed;
        top: 0;
        right: 0;
        z-index: 1000;
        height: 100%;
        width: 23rem;
        background: #F9E4D4;
        overflow-y: auto;
        overflow-x: hidden;
        display: block;
        flex-flow: column;
        text-align: center;
        font-size: 15px;
    }

    header .user img {
        height: 13rem;
        width: 13rem;
        border-radius: 50%;
        object-fit: cover;
        margin-top: 8rem;
        margin-left: 3rem;
        border: .7rem solid var(--yellow);
    }

    header .topBar {
        width: 70%;
        margin-left: 3rem;
    }

    header .topBar ul {
        list-style: none;
        padding: 1rem 3rem;
    }

    header .topBar ul li a {
        display: block;
        padding: 1rem;
        margin: 1.5rem 0;
        background-color: #534340;
        color: #fff;
        font-size: 15px;
        border-radius: 5rem;
    }

    header .topBar ul li a:hover {
        background: black;
    }
    .card-title .h3
{
    margin-left: 3rem;
}
    h4 {
        font-family: 'Poppins', sans-serif;
        margin-left: 3rem;
        color: white;
    }

    h5 {
        font-family: 'Poppins', sans-serif;
        color: white;
    }

    .information .row {
        align-items: center;
        justify-content: center;

        padding: 1rem 0;
        color: white;
        width: auto;
    }

    .information .row .info {
        flex: 1 1 48rem;
        padding: 2rem 1rem;
        padding-left: 6rem;
        padding-top: 5rem;

    }

    .information .row .info h3 {
        font-size: 2rem;
        color: var(--yellow);
        padding: 1rem 0;
        font-weight: normal;
    }

    .information .row .info h3 span {
        color: #eee;
        padding: 0 .5rem;
    }

    .heading {
        font-size: 3rem;
        padding: 1rem;
        border-bottom: .1rem solid #534340;
        color: black;
        font-family: 'Poppins', sans-serif;
    }

    .information .row .ann {
        flex: 1 1 48rem;
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        width: 20rem;
        text-align: center;
        padding-bottom: 15rem;
        margin: 2rem;

    }


    a:hover {
        background-color: #ddd;
        color: black;
    }

    .previous {
        text-decoration: none;
        display: inline-block;
        padding: 3px;
        /* float: left; */
        margin-top: 8%;
        border-radius: 3px;
        background-color: #f1f1f1;
        color: black;
    }

    .services .counter .box {
        display: flex;
        flex-wrap: wrap;
        width: 20rem;
        background: #F9E4D4;
        text-align: center;
        padding: 2rem;
        margin: 1rem;
        margin-left: 30%;

    }

    .prices .card-prices {
        font-size: 15px;
        color: black;
        background-color: #F9E4D4;
        height: 53px;
        width: 55%;
        margin-left: 8%;
        padding: 10px;
        padding-bottom: 10px;
        margin-top: 4%;
        border-radius: 3px;

    }

    .prices .card-services {
        font-size: 15px;
        color: black;
        background-color: #F9E4D4;
        height: 53px;
        width: 60%;
        margin-left: 6%;
        padding: 10px;
        padding-bottom: 10px;
        margin-top: 4%;
        border-radius: 3px;

    }

    .works .box-container {
        display: flex;
        flex-wrap: wrap;
        margin-right: 20%;
        padding: 1rem 0;
    }

    .works .box-container .box {
        height: 20rem;
        width: 26rem;
        border-radius: 1rem;
        margin: 2rem;
        overflow: hidden;
        cursor: pointer;
    }

    .works .box-container .box img {
        height: 100%;
        width: 100%;
        object-fit: cover;
    }

    .works .box-container .box:hover img {
        transform: scale(1.2);
    }

    .fa {
        padding: 20px;
        font-size: 30px;
        width: 30px;
        text-align: center;
        text-decoration: none;
    }

    .fa:hover {
        opacity: 0.7;
    }

    .fa-facebook {
        background: #3B5998;
        color: white;
    }

    .fa-twitter {
        background: #55ACEE;
        color: white;
    }

    .social ul li {
        list-style: none;
        display: flex;
    }
    #btn-book {
    border-radius: 3px;
    border: none;
    background-color: #534340;
    color: white;
    padding: 8px;
    font-size: 10pt;
    cursor: pointer;
    width: 100%;
}
.appoi{
    padding: 20px;
}
#btn-book:hover{
    background-color: #469f49;
}
.box_ {
    display: flex;
    flex-direction: column;
}
.servi_name {
    font-size: 16pt;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>
    <header>
        <div class="user">
            <a href="userindex.php"><i class="fa fa-home" style="color: #534340; font-size: 20px"></i></a> 
            <a href="tattooshop.php" class="previous" style="float:right">&laquo; Back to Shops</a>
            <?php

            $query = "SELECT * FROM tattooshops WHERE id=$shopID";
            $query_run = mysqli_query($con, $query);

            $check_shops = mysqli_num_rows($query_run) > 0;

            if ($check_shops) {
                while ($row = mysqli_fetch_array($query_run)) {
            ?>
            <div class="col-md-3 mt-3">
                <div class="card" style="width:200px; height:300px; border: none; margin-left: 3rem">
                    <img src="uploads/<?php echo $row['image']; ?>" width="300px" height="200px" alt="Tattoo Shops">

                    <h3 class="card-title" style="color: black;/*font-size: 15px; font-weight: 200;*/"><?php echo $shopName ?></h3>

                    </p>
                </div>
            </div>
        </div>
        <?php
            }
        } else {
            echo "No Tattoo Shop Found";
        }
        ?>
        </div>
        <nav class="topBar">
            <ul>
                <li><a href="#information">Information</a></li>
                <li><a href="#works">Works</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#prices">Prices</a></li>
                <li><a href="#review">Review and Feedback</a></li>
            </ul>
        </nav>
    </header>

    <section class="information" id="information">
        <h1 class="heading"> About <?php echo $shopName; ?></h1>
        <div class="row">
            <div class="info">
                <?php
                    function DayNumToDayName($dayNum) {
                        switch ($dayNum) {
                            case 1:
                                return "Sunday";
                                break;
                            case 2:
                                return "Monday";
                                break;
                            case 3:
                                return "Tuesday";
                                break;
                            case 4:
                                return "Wednesday";
                                break;
                            case 5:
                                return "Thursday";
                                break;
                            case 6:
                                return "Friday";
                                break;
                            case 7:
                                return "Saturday";
                                break;
                            default:
                                return "Always open";
                        }
                    }
                    $query = "SELECT * FROM tattooshops WHERE id=$shopID";
                    $query_run = mysqli_query($con, $query);

                    $row = $query_run->fetch_assoc();

                    echo ' <div class="col-md-3 mt-3">
                            <div class="card" style="width:600px; height:350px; border: none">
                                <div class="card-body">
                                    
                                    <h5 class="card-title" style="color: black; font-size:20px"><strong style="color: blackblack">Email: </strong>'.$row["email"].'</h5>
                                    <br />
                                    <h5 class="card-title" style="color: black;font-size: 20px"><strong style="color: blackblack">Contact Number: </strong>'.$row["contact"].'</h5>
                                    <br />
                                    <h5 class="card-title" style="color: black; font-size:20px"><strong style="color: blackblack">Available Schedule: </strong>';
                        
                                    
                                        $res7 = $con->query("SELECT distinct day_,date_format(cast(from_ as time), '%r') as from_,date_format(cast(to_ as time), '%r') as to_  FROM schedule where shopid=$shopID and void=0 order by day_ asc;");
                                        foreach($res7 as $row7) {
                                            echo '<br/><span>'.DayNumToDayName((int)$row7["day_"]).'&nbsp;'.$row7["from_"].' - '.$row7["to_"].'</span>';
                                        }
                                        
                                    
                                    
                                    echo '</h5>
                                    <br />
                                    <h5 class="card-title" style="color: black; font-size:20px"><strong style="color: blackblack">Description: </strong>'.$row["description"].'</h5>
                                    <br />
                                    <h5 class="card-title" style="color: black;font-size: 20px"><strong style="color: blackblack">Location: </strong>'.$row["location"].'</h5>

                                    </p>
                                </div>
                            </div>
                            <br />
                           
                        </div>';
                ?>
                <div class="book" style=" width: 100%">
                    <form method="post" action="bookappointment.php">
                        <div class="card appoi" style="border: 5px solid yellow; background: none; width: 50%; MARGIN-LEFT: 10%">
                            <div class="card-body" style="border: none; background-color: none">
                                <h2 style="color: black; margin-left: 25%; font-weight: bold">WANT TO GET A TATTOO?</h2>
                                    <input type="text" style="display: none;" name="shopid" value="<?php echo $shopID; ?>" />
                                    <input type="text" style="display: none;"  name="name_" value="<?php echo $shopName; ?>" />
                                    <input type="submit" id="btn-book" style="width: 30%; font-size: 14px; height: 20%; margin-left: 35%" value="BOOK NOW" />
                            </div>
                        </div>
                        </form>
                    </div>
            </div>
            <div class="card-announce">
                <div class="container">
                    <h2 style="color:black; font-family: 'Poppins', sans-serif"><img src="shops/ann.png" style="height: 50px; width: 40px">Announcements</h2>
                    <div class="row">
                        <?php
                        $query = "SELECT * FROM announcements WHERE shopid=".$shopID."";
                        $query_run = mysqli_query($con, $query);
                        $check_announce = mysqli_num_rows($query_run) > 0;

                        if ($check_announce) {
                            while ($row = mysqli_fetch_array($query_run)) {
                        ?>
                            <div class="head">
                                <div class="card" style=" height:180px; background-color: white">

                                    <div class="card-body" style=" font-family: 'Poppins', sans-serif; font-size: 15px">
                                        <h5 class="card-title" style="color: black">Event: <?php echo $row["event"]; ?> </h5>
                                        <p class="card-text" style="color: black; font-size: 13px; margin-right:12%">Date: <?php echo date ('M d, Y',strtotime($row['date'])); ?>
                                        <p class="card-text" style="color: black; font-size: 13px; margin-right:12%">Start Time: <?php echo date('h:i:A', strtotime($row['start_time'])); ?>
                                        <p class="card-text" style="color: black; font-size: 13px; margin-right:12%">End Time: <?php echo date('h:i:A', strtotime($row['end_time']));; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php
                            }
                        } else {
                            echo '<h3 style="font-weight: 200; margin-left: 7%; color: black">NO ANNOUNCEMENT</h3>';
                        }
                        ?>
                    </div>

                    
                </div>
            </div>
        </div>

    </section>


    <section class="works" id="works">
        <h1 class="heading">Our Works</h1>
        <div class="box-container">
            <?php
            $works = array_diff(scandir("uploads/works/".$shopID), array('.','..'));
            if(count($works) > 0) {
            foreach($works as $work){
                echo '<div class="box">
                <img src="uploads/works/'.$shopID.'/'.$work.'" width="300px" height="200px" alt="Tattoo Shops">
            </div>';
            }
        } else {
            echo '<h2 style="color: white; text-align:center">NO WORKS FOUND</h2>';
        }
            ?>
        </div>
    </section>


    <section class="services" id="services">
        <h1 class="heading"> Our Services </h1>
        <div class="counter" style="margin-top: 5%;">
            <div class="box">
                <img src="shops/ttoo.png" style="width: 50px; height: 50px">
                <h1>Tattoo</h1>
            </div>
            <div class="box">
                <img src="shops/pierc.png" style="width: 50px; height: 50px">
                <h1>Piercing</h1>
            </div>
        </div> 
    </section>

    <section class="prices" id="prices">
        <h1 class="heading"> Tattoo Prices </h1>
        <div class="card-services">
            <h3><strong style="color: #F0A500">Reminder:</strong> The prices of services depends on the tattoo shop services offered. </h3>
        </div>
        <br />
        <br />
        <div class="container-fluid px-4">
            <h2 class="mt-4" style="margin-left: 33%; color:black ">Services Prices</h2>
            <div class="row">
                <div class="card-body" style="border: none">
                </div>
                <div class="col-md-12" style="height: 200%; width: 200%; margin-left: 20%">
                    <div class="card" style="color:black; padding-right: 25px; padding-left: 4%; border: none">
                        <div class="card-body" style="padding-right: 25px; border: none">
                            <table class="table table-bordered" style="border: 3px solid black; font-size: 15px; width: 30%; ">
                                <thread>
                                    <tr>
                                        <th style="border: 2px solid black">Type of Services</th>
                                        <th style="border: 2px solid black">Estimated Amount</th>
                                    </tr>
                                </thread>
                                <tbody>
                                    <?php
                                    $query = "SELECT * FROM services where shopid=".$shopID." and void=0";
                                    $query_run = mysqli_query($con, $query);

                                    if (mysqli_num_rows($query_run) > 0) {
                                        foreach ($query_run as $row) {
                                    ?>
                                            <tr style="text-align: center">
                                                <td><?= $row['type_services']; ?></td>
                                                <td>&#8369;<?= $row['estimated_amount']; ?></td>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-prices">
            <h3><strong style="color: #F0A500">Reminder:</strong> The prices of tattoo depends on size, color, and artist fee. </h3>
        </div>
        <br />
        <br />
        <div class="container-fluid px-4">
            <h2 class="mt-4" style="margin-left: 33%; color:black ">Tattoo Prices</h2>
            <div class="row">
                <div class="card-body">
                </div>
                <div class="col-md-12" style="height: 200%; width: 200%; border: none">
                    <div class="card" style="color:black; padding-right: 25px; padding-left: 4%; border: none">
                        <div class="card-body" style="padding-right: 25px">
                            <table class="table table-bordered" style="border: 3px solid black; font-size: 15px; width: 70%">
                                <thread>
                                    <tr>
                                        <th style="border: 2px solid black">Color</th>
                                        <th style="border: 2px solid black">Size</th>
                                        <th style="border: 2px solid black">Artist Fee</th>
                                        <th style="border: 2px solid black">Estimated Total</th>
                                    </tr>
                                </thread>
                                <tbody>
                                    <?php
                                    $query = "SELECT * FROM prices";
                                    $query_run = mysqli_query($con, $query);

                                    if (mysqli_num_rows($query_run) > 0) {
                                        foreach ($query_run as $row) {
                                    ?>
                                            <tr style="text-align: center">
                                                <td><?= $row['color']; ?></td>
                                                <td><?= $row['size']; ?></td>
                                                <td><?= $row['artist_fee']; ?></td>
                                                <td><?= $row['total']; ?></td>

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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="review" id="review">
        <h1 class="heading"> Reviews and Feedback </h1>
        <?php require ('star.php') ?>
        <?php require ('submit_rating.php') ?>
    </section> 

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- custom js file link  -->
    <script src="assets/js/newscript.js"></script>

</body>

</html>