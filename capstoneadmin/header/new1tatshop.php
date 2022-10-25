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

            $query = "SELECT * FROM tattooshops WHERE name='Herchel Vape And Ink'";
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
                                <a class="brand-text" href="shops/herchel.php">View Shop</a>

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
        <?php
            require 'admin/config/dbcon.php';

            $query = "SELECT * FROM tattooshops WHERE name='Smile Tattoo Studio'";
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
                    <a class="brand-text" href="shops/smile.php">View Shop</a>

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
        <?php
            require 'admin/config/dbcon.php';


            $query = "SELECT * FROM tattooshops WHERE name='Emersons Earth Ink Tattoo'";
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
                    <a class="brand-text" href="shops/emerson.php">View Shop</a>

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
        <?php
            require 'admin/config/dbcon.php';


            $query = "SELECT * FROM tattooshops WHERE name='Asyang Tattoo'";
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
                    <a class="brand-text" href="shops/asyang.php">View Shop</a>

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
        <?php
            require 'admin/config/dbcon.php';


            $query = "SELECT * FROM tattooshops WHERE name='Danny Mabatang Ink'";
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
                    <a class="brand-text" href="shops/mabatang.php">View Shop</a>

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
        <?php
            require 'admin/config/dbcon.php';


            $query = "SELECT * FROM tattooshops WHERE name='Tintamore'";
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
                    <a class="brand-text" href="shops/tintamore.php">View Shop</a>

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
        <?php
            require 'admin/config/dbcon.php';


            $query = "SELECT * FROM tattooshops WHERE name='Baruyas Ink'";
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
                    <a class="brand-text" href="shops/baruya.php">View Shop</a>

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
        <?php
            require 'admin/config/dbcon.php';


            $query = "SELECT * FROM tattooshops WHERE name='Bataan Tattoo'";
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
                    <a class="brand-text" href="shops/bataan.php">View Shop</a>

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
        <?php
            require 'admin/config/dbcon.php';


            $query = "SELECT * FROM tattooshops WHERE name='Inkvulnerable Tattoo'";
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
                    <a class="brand-text" href="shops/inkvulnerable.php">View Shop</a>

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
        <?php
            require 'admin/config/dbcon.php';


            $query = "SELECT * FROM tattooshops WHERE name='New Tinta Mariveles'";
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
                    <a class="brand-text" href="shops/newtinta.php">View Shop</a>

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
        <?php
            require 'admin/config/dbcon.php';


            $query = "SELECT * FROM tattooshops WHERE id='62'";
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
                echo '<h4 style="color: white">No Tattoo Shop Found</h4>';
            }



        ?>
        <?php
            require 'admin/config/dbcon.php';


            $query = "SELECT * FROM tattooshops WHERE id='63'";
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
                echo '<h4 style="color: white">No Tattoo Shop Found</h4>';
            }



        ?>
        <?php
            require 'admin/config/dbcon.php';


            $query = "SELECT * FROM tattooshops WHERE id='64'";
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
                echo '<h4 style="color: white">No Tattoo Shop Found</h4>';
            }



        ?>
        <?php
            require 'admin/config/dbcon.php';


            $query = "SELECT * FROM tattooshops WHERE id='65'";
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
                echo '<h4 style="color: white">No Tattoo Shop Found</h4>';
            }



        ?>
       
    </div>
</div>