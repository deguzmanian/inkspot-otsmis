<br />

<br />
<br />
<br />
<br />

<h2 style="color: black; text-align:center">TATTOO SHOPS/ARTIST</h2>
<div class="container py-5">

    <div class="row mt-4">
        <?php
            require 'admin/config/dbcon.php';

            $query = "SELECT * FROM tattooshops";
            $query_run = mysqli_query($con,$query);

            $check_shops = mysqli_num_rows($query_run) > 0;

            if($check_shops)
            {
                while($row = mysqli_fetch_array($query_run))
            
                {
                    ?>
        <div class="col-md-3 mt-3">
            <div class="card" style="width:300px; height:370px">
            <img src="uploads/<?php echo $row['image']; ?>" width="300px" height="200px" alt="Tattoo Shops">
                <div class="card-body">
                    <h6 class="card-title" style="color: black; text-align:center"><?php echo $row['name']; ?> </h6>
                    <h6 class="card-title" style="color: black; text-align:center"><img src="uploads/loca.png" style="width:20px; height:20px"> <?php echo $row['location']; ?> </h6>
                    <p class="card-text" style="color: black; text-align:center"><?php echo $row['description']; ?>
                    <br />
                    <br />
                    <a class="brand-text" href="header/details.php?id=<?php echo $row['id'] ?>">View Shop</a>

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