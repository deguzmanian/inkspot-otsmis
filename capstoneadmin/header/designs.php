<?php

include('admin/config/dbcon.php');


?>


<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

body
{
    font-family: 'Poppins', sans-serif;
}
	.img:hover {
    box-shadow: 0px 0px 11px 5px #00000091;
	/* cursor: pointer; */
}
.bd {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    font-family: 'Poppins', sans-serif;
}
.img-wrap_{

    height: 500px;
    width: 300px;
    overflow: hidden;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}
.btn-visit {
    width: 50%;
    border: none;
	margin-left: 27%;
    padding: 5px 10px;
    color: #534340;
    cursor: pointer;
}
.btn-visit:hover{
    background-color: #FFB200;
	color: #534340;
}
.d-none{
    display:none;
}
form{
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
}
.card{
    user-select: none;
}
.ff {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    /* row-gap: 20px; */
    /* column-gap: 20px; */
    justify-content: space-between;
}


#container25 {
	display: flex;
	justify-content: center;
	align-items: center;
	width: 100%;
	height: 100vh;
}
.box13 {
	width: 100%;
	max-width: 1170px;
	padding: 15px;
}
.box13 h1 {
	margin: 30px 0;
	color: black;
	font-size: 35px;
	text-align: center;
	text-transform: uppercase;
}
.Servicecards {
	display: flex;
	justify-content: space-between;
	width: 80%;
	margin-left:10%;
	height:50%;
	text-align: center;
}
.servcard {
	width: 30%;
	padding: 20px 20px;
	border-radius: 3px;
	transition: transform .3s;
	backdrop-filter: blur(30px);
	border: 2px solid rgb(177,170,170);

}

.scard-content h2 {
	text-transform: uppercase;
	font-size: 20px;
	font-weight: 700;
	margin-bottom: 10px;
}
.scard-content p {
	font-size: 14px;
	line-height: 1.9;
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
	#container25 {
		height: auto;
	}
	.box13 {
		padding: 20px;
	}
	.servecard {
		width: 100%;
		margin-bottom: 30px;
	}
}
@media only screen and (max-width: 767px) {
	.box13 h1 {
		font-size: 1.5rem
	}
	.Servicecards {
		justify-content: center;
	}
	.servecard {
		margin-bottom: 20px;
		width: 100%;
	}
}
button:active
{
	color: red;
	transform: scale(1.2);
}

</style>

<!--SERVCES-->
<div id="container25">
		<div class="box13">
			<h1 style="color: #826F66; font-weight: bold"> Services</h1>
			<div class="Servicecards">
			<article class="servcard">
					<div class="sImg">
						<img src="images/tattooink.png" width="100px" height="100px">
					</div>
					<div class="scard-content">
						<h2>Tattoo</h2>
						<?php
                                        $dash_user_query = "SELECT * FROM services WHERE type_services='Tattoo' ";
                                        $dash_user_query_run = mysqli_query($con, $dash_user_query);

                                        if($user_total = mysqli_num_rows($dash_user_query_run))
                                        {
                                            echo '<h6 class="mb-0"> '.$user_total.' people already used this service </h6>';
                                        }
                                        else
                                        {
                                            echo '<h4 class="mb-0">No Data</h4>';
                                        }
                                        ?>   
					</div>
				</article>
				<article class="servcard">
					<div class="sImg">
						<img src="images/piercing.jpg" width="100px" height="100px">
					</div>
					<div class="scard-content">
						<h2>Piercings</h2>
						<?php
                                        $dash_user_query = "SELECT * FROM services WHERE type_services='Piercing' ";
                                        $dash_user_query_run = mysqli_query($con, $dash_user_query);

                                        if($user_total = mysqli_num_rows($dash_user_query_run))
                                        {
                                            echo '<h6> '.$user_total.' people already used this service </h6>';
                                        }
                                        else
                                        {
                                            echo '<h4 class="mb-0">No Data</h4>';
                                        }
                                        ?>  
					</div>
				</article>
				<article class="servcard">
				<div class="sImg">
						<img src="images/jewelry.jpg" width="100px" height="100px">
					</div>
					<div class="scard-content">
						<h2> Body Jewelry</h2>
						<?php
                                        $dash_user_query = "SELECT * FROM services WHERE type_services='Body Jewelry' ";
                                        $dash_user_query_run = mysqli_query($con, $dash_user_query);

                                        if($user_total = mysqli_num_rows($dash_user_query_run))
                                        {
                                            echo '<h6 class="mb-0"> '.$user_total.' people already used this service </h6>';
                                        }
                                        else
                                        {
                                            echo '<h6 class="mb-0">No record found</h6>';
                                        }
                                        ?> 
					</div>
				</article>
			
				<article class="servcard">
				<div class="sImg">
						<img src="images/cosmetic.jpg" width="100px" height="100px">
					</div>
					<div class="scard-content">
						<h2>Cosmetic Tattoo</h2>
						<?php
                                        $dash_user_query = "SELECT * FROM services WHERE type_services='Cosmetic Tattoo' ";
                                        $dash_user_query_run = mysqli_query($con, $dash_user_query);

                                        if($user_total = mysqli_num_rows($dash_user_query_run))
                                        {
                                            echo '<h6 class="mb-0"> '.$user_total.' people already used this service </h6>';
                                        }
                                        else
                                        {
                                            echo '<h4 class="mb-0">No Data</h4>';
                                        }
                                        ?>   
					</div>
					</div>
				</article>
			</div>
		</div>
	</div>

    <!--sERVICES-->



<h3 style="background: white; color: #826F66; width: 100%; height: 70px; text-align:center; padding-top: 2%; font-weight: bold">DISCOVER BEST DESIGNS</h3>
<div class="container py-5">

	<div class="row_ mt-4_ ff">

    <?php

require 'admin/config/dbcon.php';

$res = $con->query("SELECT *,t.id as shopid FROM `tattooshops` t left join works w on t.id = w.shopid  inner join user u on t.id = u.shopid where u.approved=1");




foreach($res as $row){
	
    // $im = "style='background:#ffffff url("."'uploads/".trim($row["image"]).""."') center/cover no-repeat;'";
    echo '
	
    <form method="post" action="shopdetails.php">
	
    <div id="_'.$row["id"].'" class="shop-cards">

    <div class="card" style="width:300px; height:300px">
	

	
    <div class="img-wrap_" style="background-image: url(\'uploads/works/'.trim($row["image"]).'\');"></div>
	


                    <input type="text"  name="shopid" class="d-none" value="'.trim($row["shopid"]).'" />
                    <input type="text" id="in-'.$row["shopid"].'" name="name_" class="d-none" value="'.$row["name"].'"/>
						
					<br />
                    <input type="submit" data-id="'.$row["shopid"].'" data-name="'.$row["name"].'" id="btn-sub" class="btn-visit" value="Visit shop"/>
                    
     
                    <br />  
					
        </div>
		
        </div>
         
        </form>
				   
	
        ';
}
?>
<br />
<br/>
<br />



            </div>
            </div>


            
            <script src="/jquery-3.6.0.js"></script>
<script src="tatshops.js" defer></script>




     




