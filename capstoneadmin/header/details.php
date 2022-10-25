<?php

require '../admin/config/dbcon.php';

if(isset($_GET['id'])){
    $id = mysqli_real_escape_string($con, $_GET['id']);

    $sql = "SELECT * FROM tattooshops WHERE id=$id";

    $result = mysqli_query($con, $sql);

    $shop = mysqli_fetch_assoc($result);

    mysqli_free_result($result);
    mysqli_close($con);

}


        ?>



<!DOCTYPE html>
<html lang="en">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
        *{
            font-family: 'Poppins', sans-serif;
        }
        *::selection{
            background:var(--yellow);
            color:#333;
        }

        html{
            font-size: 62.5%;
            overflow-x: hidden;
        }

        html::-webkit-scrollbar{
            width:1.4rem;
        }

        html::-webkit-scrollbar-track{
            background:#222;
        }

        html::-webkit-scrollbar-thumb{
            background:var(--yellow);
        }

        body{
            background:#534340;
            overflow-x: hidden;
            padding-left: 35rem;
        }


        section{
            min-height: 100vh;
            padding:1rem;
        }
        header{
            position: fixed;
            top:0; left:0;
            z-index: 1000;
            height:100%;
            width:30rem;
            background:#111;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-flow: column;
            text-align: center;
            font-size: 15px;
        }
        .card-announce{
            position: absolute;
            top:0; right:0;
            z-index: 1000;
            height:100%;
            width:25rem;
            background:#F9E4D4;
            display: block;
            flex-flow: column;
            text-align: center;
            font-size: 15px;
        }
     
        header .user img{
            height:13rem;
            width:13rem;
            border-radius: 50%;
            object-fit: cover;
            margin-top: 8rem;
            margin-left: 2rem;
            border:.7rem solid var(--yellow);
        }
        header .topBar{
            width:70%;
           
        }

        header .topBar ul{
            list-style: none;
            padding:1rem 3rem;
        }
        header .topBar ul li a{
            display: block;
            padding:1rem;
            margin:1.5rem 0;
            background-color: #534340;
            color:#fff;
            font-size: 15px;
            border-radius: 5rem;
        }

        header .topBar ul li a:hover{
            background:var(--yellow);
        }
        h4
        {
            font-family: 'Poppins', sans-serif;
            margin-left: 3rem;
            color: white;
        }
        h5
        {
            font-family: 'Poppins', sans-serif;
            color: white;
        }
        .information .row{
            align-items: center;
            justify-content: center;
       
            padding:1rem 0;
            color: white;
            width: 500px;
        }

        .information .row .info{
            flex:1 1 48rem;
            padding:2rem 1rem;
            padding-left: 6rem;
            padding-top: 5rem;
           
        }

        .information .row .info h3{
            font-size: 2rem;
            color:var(--yellow);
            padding:1rem 0;
            font-weight: normal;
        }

        .information .row .info h3 span{
            color:#eee;
            padding:0 .5rem;
        }
        .heading{
            font-size: 3rem;
            padding:1rem;
            border-bottom: .1rem solid #fff4;
            color:#fff;
            font-family: 'Poppins', sans-serif;
        }

        .information .row .ann{
            flex:1 1 48rem;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            width:20rem;
            text-align: center;
            padding-bottom: 15rem;
            margin:2rem;
        
        }
     

            a:hover {
            background-color: #ddd;
            color: black;
            }

            .previous {
                text-decoration: none;
            display: inline-block;
            padding: 3px;
            float:left;
            margin-top:8%;
            border-radius: 3px;
            background-color: #f1f1f1;
            color: black;
        }
        .services .counter .box{
            flex: 0 3 auto;
            width:20rem;
            background:#F9E4D4;
            text-align: center;
            padding: 2rem;
            margin: 1rem;
            position: relative;
            margin-left: 30%;
            
        }
        .prices .card-prices
        {
            font-size: 15px;
            color: black;
            background-color:#F9E4D4;
            height:53px; 
            width: 55%;
            margin-left: 8%;
            padding: 10px;
            padding-bottom: 10px;
            margin-top: 4%;
            border-radius: 3px;

        }
        .prices .card-services
        {
            font-size: 15px;
            color: black;
            background-color:#F9E4D4;
            height:53px; 
            width: 60%;
            margin-left: 6%;
            padding: 10px;
            padding-bottom: 10px;
            margin-top: 4%;
            border-radius: 3px;

        }
       

    </style>

<body>
    <header>

<div class="user">
    <a href="../tattooshop.php" class="previous">&laquo; Back to Shops</a>
<?php if($shop): ?>
            <img src="../uploads/<?php echo $shop['image']; ?>" width="200px" height="150px" style="margin-right: 15%" alt="Tattoo Shops">
            <h4 style="margin-right: 10%"><?php echo htmlspecialchars($shop['name']); ?></h4>
            <h5>Description: <?php echo htmlspecialchars($shop['description']); ?></h5>
            <h5>Location: <?php echo htmlspecialchars($shop['location']); ?></h5>

        <?php else: ?>

            <h5>No Tattoo Shop Found</h5>

        <?php endif; ?>
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

<h1 class="heading"> About <?php echo htmlspecialchars($shop['name']); ?> </h1>

<div class="row">
<div class="info">
    <?php if($shop): ?>
            <h3>Email: <?php echo htmlspecialchars($shop['email']); ?></h3>
            <h3>Contact Number: <?php echo htmlspecialchars($shop['contact']); ?></h3>
            <h3>Available Schedule: <?php echo htmlspecialchars($shop['schedule']); ?></h3>
            <h3>Followers: <?php echo htmlspecialchars($shop['followers']); ?></h3>
            <h3>Description: <?php echo htmlspecialchars($shop['description']); ?></h3>
            <h3>Location: <?php echo htmlspecialchars($shop['location']); ?></h3>

        <?php else: ?>

            <h5>No Tattoo Shop Found</h5>

        <?php endif; ?>

        
        
</div> 
<div class="card-announce">
<div class="container">
<h2 style="color:black; font-family: 'Poppins', sans-serif"><img src="ann.png" style="height: 50px; width: 50px"> Tattoo Shops Announcements</h2>
    <div class="row">
        <?php
            require '../admin/config/dbcon.php';

            $query = "SELECT * FROM announcements";
            $query_run = mysqli_query($con,$query);

            $check_announce = mysqli_num_rows($query_run) > 0;

            if($check_announce)
            {
                while($row = mysqli_fetch_array($query_run))
            
                {
                    ?>
        <div class="head">
        
            <div class="card" style="width:250px; height:180px; background-color: white">
            
                <div class="card-body" style=" font-family: 'Poppins', sans-serif; font-size: 15px">
                    <h5 class="card-title" style="color: black">Shop Name: <?php echo $row['shopname']; ?> </h5> 
                    <h5 class="card-title" style="color: black">Event: <?php echo $row['event']; ?> </h5>
                    <p class="card-text" style="color: black; font-size: 13px; margin-right:12%">Date: <?php echo $row['date']; ?>
                    <p class="card-text" style="color: black; font-size: 13px; margin-right:12%">Start Time: <?php echo $row['start_time']; ?>
                    <p class="card-text" style="color: black; font-size: 13px; margin-right:12%">End Time: <?php echo $row['end_time']; ?>
                    </p>
                </div>
            </div>
        </div>
                    <?php
                    
                }
            }
            else
            {
                echo "No Tattoo Shop Found";
            }



        ?>
       
    </div>
</div>
</div>
</div>

</section>


<section class="works" id="works">



</section>

    
<section class="services" id="services">

<h1 class="heading"> Our Services </h1>

<div class="counter" style="margin-top: 5%">

        <div class="box">
            <img src="ttoo.png" style="width: 50px; height: 50px">
            <h1>Tattoo</h1>
        </div>

        <div class="box">
        <img src="pierc.png" style="width: 50px; height: 50px">
            <h1>Piercing</h1>
        </div>

        <div class="box">
        <img src="cosmetic.png" style="width: 50px; height: 50px">
            <h1>Cosmetic Tattoo</h1>
        </div>


    </div>

</section>

<section class="prices" id="prices">
<h1 class="heading"> Tattoo Prices </h1>
<div class="card-prices">
    <h3><strong style="color: #F0A500">Reminder:</strong> The prices of tattoo depends on size, color, and artist fee. </h3>
</div>
<br />
<br />
<div class="container-fluid px-4">
    <h2 class="mt-4" style="margin-left: 33%; color:white ">Tattoo Prices</h2>
    <div class="row">
        <div class="card-body">
        </div>

    <div class="col-md-12" style="height: 200%; width: 200%">
       
        <div class="card" style="color:white; padding-right: 25px; padding-left: 4%">

            <div class="card-body" style="padding-right: 25px">

            <table class="table table-bordered" style="border: 3px solid white; font-size: 15px; width: 30%">
                <thread>
                    <tr>
                        <th style="border: 2px solid white">Color</th>
                        <th style="border: 2px solid white">Size</th>
                        <th style="border: 2px solid white">Artist Fee</th>
                        <th style="border: 2px solid white">Estimated Total</th>
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
                        <tr style="text-align: center">
                            <td><?= $row['color']; ?></td>
                            <td><?= $row['size']; ?></td>
                            <td><?= $row['artist_fee']; ?></td>
                            <td><?= $row['total']; ?></td>
                           
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

<div class="card-services">
    <h3><strong style="color: #F0A500">Reminder:</strong> The prices of services depends on the tattoo shop services offered. </h3>
</div>
<br />
<br />
<div class="container-fluid px-4">
    <h2 class="mt-4" style="margin-left: 33%; color:white ">Services Prices</h2>
    <div class="row">
        <div class="card-body">
        </div>

    <div class="col-md-12" style="height: 200%; width: 200%">
       
        <div class="card" style="color:white; padding-right: 25px; padding-left: 4%">

            <div class="card-body" style="padding-right: 25px">

            <table class="table table-bordered" style="border: 3px solid white; font-size: 15px; width: 30%">
                <thread>
                    <tr>
                        <th style="border: 2px solid white">Type of Services</th>
                        <th style="border: 2px solid white">Estimated Amount</th>
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
                        <tr style="text-align: center">
                            <td><?= $row['type_services']; ?></td>
                            <td><?= $row['estimated_amount']; ?></td>
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




</section>


<section class="review" id="review">
<?php //include('index.php'); ?>
<?php //include('submit_rating.php'); ?>


</section>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="assets/js/newscript.js"></script>
   
</body>
</html>