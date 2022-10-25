<br />
<br />
<br />
<br />
<br />


<style>
	.card:hover {
    box-shadow: 0px 0px 11px 5px #00000091;
	/* cursor: pointer; */
}
.bd {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
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
    padding: 5px 10px;
    border-radius: 3px;
    background-color: #2196f3;
    color: white;
    cursor: pointer;
}
.btn-visit:hover{
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
<script src="/jquery-3.6.0.js"></script>
<script src="tatshops.js" defer></script>
<h1 style="color: #826F66; text-align:center; font-weight: bold">TATTOO SHOPS/FREELANCE ARTIST</h1>
<div class="container py-5">
	<div class="row_ mt-4_ ff">
    

	<?php

			require 'admin/config/dbcon.php';

            $res = $con->query("SELECT *,t.id as shopid FROM `tattooshops` t left join user u on t.id = u.shopid where u.approved=1 LIMIT 4");

			foreach($res as $row){
                // $im = "style='background:#ffffff url("."'uploads/".trim($row["image"]).""."') center/cover no-repeat;'";
                $im = "style='background-image: url(uploads/".trim($row["image"])."';";
				echo '
                <form method="post" action="shopdetails.php">
                <div id="_'.$row["id"].'" class="shop-cards col-md-3 mt-3">
                        <div class="card" style="width:300px; height:370px">
                        <div class="img-wrap_" style="background-image: url(\'uploads/'.trim($row["image"]).'\');"></div>
                            <div class="card-body bd">
                                <h6 class="card-title" style="color: black; text-align:center">'.$row["name"].'</h6>
                                <h6 class="card-title" style="color: black; text-align:center">
								<i class="fa fa-map-marker-alt" style="font-size: 14pt; color: #ff2a2a;"></i> '.$row["location"].'</h6>
                                <p class="card-text" style="color: black; text-align:center;text-overflow: ellipsis;
                                overflow: hidden;
                                word-break: break-all;
                                white-space: break-spaces;">'.$row["description"].'</p>
                                <input type="text" name="shopid" class="d-none" value="'.trim($row["shopid"]).'"/>
                                <input type="text" name="name_" class="d-none" value="'.$row["name"].'"/>
                                <!--<button class="btn-visit" onclick="ViewShop(this,'.trim($row["id"]).',`'.$row["name"].'`)">Visit shop</button>-->
                                <input type="submit" class="btn-visit" value="Visit shop"/>
                            </div>
                        </div>
                    </div>
                </form>
                ';
			}
	?>
     
	</div>
</div>
<a href="tattooshop.php" class="waves-effect waves-light btn" style="background: #826F66 !important; margin-left:43%; color:white">More Tattoo Shops &raquo;</a>
