<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');

?>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

body
{
    font-family: 'Poppins', sans-serif;
}
	.card:hover {
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

    background-image: url(uploads/herchel.jpg);
    height: 500px;
    width: 300px;
    overflow: hidden;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}
.btn-visit {
    width: 100%;
    border: none;
    padding: 5px 23px;
    border-radius: 3px;
    background-color: #2196f3;
    color: white;
    cursor: pointer;
    font-size: 14px;

}
.btn-visit:hover{
    background-color: #826f66;
}
.btn-message {
    width: 47%;
    border: none;
    padding: 5px 23px;
    border-radius: 3px;
    background-color: #2196f3;
    color: white;
    cursor: pointer;
    font-size: 14px;
   
}
.btn-message:hover{
    background-color: #826f66;
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

</style>
<br />
<br />
<br />
<br />

<div class="container py-5">
    <h2 style="color: black; text-align:center; font-weight: bold; color:#534340">TATTOO SHOPS / FREELANCE ARTIST</h2>
   
	<div class="row_ mt-4_ ff">
	<?php
			require 'admin/config/dbcon.php';
            $res = $con->query("SELECT *,t.id as shopid FROM `tattooshops` t left join user u on t.id = u.shopid where u.approved=1");

			foreach($res as $row){
                // $im = "style='background:#ffffff url("."'uploads/".trim($row["image"]).""."') center/cover no-repeat;'";
                $im = "style='background-image: url(uploads/".trim($row["image"])."';";
				echo '
                <form method="post" action="shopdetails.php">
                <div id="_'.$row["id"].'" class="shop-cards col-md-3 mt-3">
                        <div class="card" style="width:300px; height:400px">
                        <div class="img-wrap_" style="background-image: url(\'uploads/'.trim($row["image"]).'\');"></div>
                            <div class="card-body bd">
                                <h6 class="card-title" style="color: black; text-align:center">'.$row["name"].'</h6>
                                <h6 class="card-title" style="color: black; text-align:center">
								<i class="fa fa-map-marker-alt" style="font-size: 14pt; color: #ff2a2a;"></i> '.$row["location"].'</h6>
                                <p class="card-text" style="color: black; text-align:center;text-overflow: ellipsis;
                                overflow: hidden;
                                word-break: break-all;
                                white-space: break-spaces;">'.$row["description"].'</p>
                                <input type="text"  name="shopid" class="d-none" value="'.trim($row["shopid"]).'" />
                                <input type="text" id="in-'.$row["shopid"].'" name="name_" class="d-none" value="'.$row["name"].'"/>

                        <div>
                           
                            <input type="submit" data-id="'.$row["shopid"].'" data-name="'.$row["name"].'" id="btn-sub" class="btn-visit" value="Visit shop"/>
                                
                        </div>
                                </div>
                        </div>
                    </div>
                    </form>
                    ';
			}
	?>
     
	</div>
</div>

<?php require('header/footer.php'); ?>
<?php include('includes/footer.php');?>
<!-- <script src="tattooshop.js">
</script> -->
<script src="/jquery-3.6.0.js"></script>
<script src="tatshops.js" defer></script>