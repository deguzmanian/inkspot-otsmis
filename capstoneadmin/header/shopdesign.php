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
/* 
    html::-webkit-scrollbar {
        width: 1.4rem;
    }

    html::-webkit-scrollbar-track {
        background: #222;
    }

    html::-webkit-scrollbar-thumb {
        background: var(--yellow);
    } */

    body {
        background: white;
        overflow-x: hidden;
        padding-left: 35rem;
    }


    section {
        /* min-height: 100vh; */
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
        margin-left: 2rem;
        border: .7rem solid var(--yellow);
    }

    header .topBar {
        width: 70%;

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
    background-color: #4caf50;
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
  
            <?php

            $query = "SELECT * FROM tattooshops WHERE id=$shopID";
            $query_run = mysqli_query($con, $query);



 
                $query = "SELECT * FROM tattooshops WHERE id=$shopID";
                $query_run = mysqli_query($con, $query);

                // $check_shops = mysqli_num_rows($query_run) > 0;
$row = $query_run->fetch_assoc();


                 
                        // require '../admin/config/dbcon.php';

                        $query = "SELECT * FROM announcements WHERE shopid=".$shopID."";
                        $query_run = mysqli_query($con, $query);




                        ?>

                    </div>
                    <!-- <br />
                    <br />
                    <br /> -->
                    <!-- <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br /> -->


                    <!--booking -->
                    <div class="book">
                    <form method="post" action="bookappointment.php">
                        <div class="card appoi">
                            <div class="card-body">
                                <h3 style="color: black; margin:0;">WANT TO GET A TATTOO?</h3>
                                
                                    <input type="text" style="display: none;" name="shopid" value="<?php echo $shopID; ?>" />
                                    <input type="text" style="display: none;"  name="name_" value="<?php echo $shopName; ?>" />
                                    <input type="submit" id="btn-book" value="Book an appointment here" />
                                
                                <!-- <a href="../appointment/herchel/index.php">
                                    <h4 style="color:red; margin-right:12%">Click here to book an appointment</h4>
                                </a> -->
                            </div>
                        </div>
                        </form>
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



    

<!-- 
    <section class="review" id="review">
        <h1 class="heading"> Reviews and Feedback </h1>
        <?php //include('index.php'); 
        ?>
        <?php //include('submit_rating.php'); 
        ?>


    </section> -->




    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- custom js file link  -->
    <script src="assets/js/newscript.js"></script>

</body>

</html>