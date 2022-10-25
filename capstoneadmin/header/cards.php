<div class="container py-5">
    <h4 style="color: black; text-align:center; font-size: 40px; z-index: 12; text-transform: uppercase; color: #826F66; font-weight: bold">DESIGNS</h4>
	<div class="row_ mt-4_ ff">
    <?php

    require 'admin/config/dbcon.php';

    $res = $con->query("SELECT *,t.id as shopid FROM `tattooshops` t left join works w on t.id = w.shopid  inner join user u on t.id = u.shopid where u.approved=1 LIMIT 4");

    foreach($res as $row){
    echo '
        <form method="post" action="shopdetails.php">
            <div id="_'.$row["id"].'" class="shop-cards">
            <div class="card" style="width:300px; height:300px">
            <div class="img-wrap_" style="background-image: url(\'uploads/works/'.trim($row["image"]).'\');"></div>
            <input type="text"  name="shopid" class="d-none" value="'.trim($row["shopid"]).'" />
            <input type="text" id="in-'.$row["shopid"].'" name="name_" class="d-none" value="'.$row["name"].'"/>
            <input type="submit" data-id="'.$row["shopid"].'" data-name="'.$row["name"].'" id="btn-sub" class="btn-visit" value="Visit shop"/>
        </div>
        </div>
        </form>
        ';
}
?>
    <a href="designs.php" class="waves-effect waves-light btn" style="background: #826F66 !important; margin: 50px auto 0; display:block; color:white; width: 100%; max-width: 250px;">More Designs &raquo;</a>
    </div>
</div>
