

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@300&display=swap');

* {
    box-sizing: border-box;

}
.header{
    font-family: 'Poppins', sans-serif;
    font-weight: bold;
    text-align: center;
}

.title{
    text-align: center;
    font-family: 'Roboto', sans-serif;
    background: #826F66;
    color: white;
   

}
.row1 {
   
    margin-left: 10%;
    overflow: auto;

}
.column{
    margin: 10px;
    float: left;
    height: 200px;
    width: 300px;
    margin-right: 1px; 

}
.column a {
    font-size: 13px;
    text-align: center;
    padding-left: 20px;
   
}
.column img {
    width: 200px;
    height: 200px;
    
}
h6{
    padding: 5px;
    text-align: center;
    font-family: 'Poppins', sans-serif;
}
.note
{
    text-align: center;
}
a:hover
{
    color: black;
}
body{
 font-family: arial;
}
.main{

 margin-left: 8%;
}

.cardS{
     width: 251px;
     display: inline-block;
     box-shadow: 2px 2px 20px black;
     border-radius: 5px; 
     margin: 2%;
    }

.image img{
  width: 250px;
  border-top-right-radius: 5px;
  border-top-left-radius: 5px;

 }

.titleC{
 
  text-align: center;
  padding: 10px;
  
 }

h1{
  font-size: 20px;
  color: #826F66;
 }


</style>
<br />
<br />
<br />
<body>
<section class="fcategories">

<div class="container1">
<div class="section white center">
        <h2 class="header" font-weight="bold" style="color: #826F66">SERVICES</h2>
    </div>
    <div class="main">
  

 <!--cards -->


<!--cards -->


<div class="cardS">

<div class="image">
   <img src="admin/works/pier.jpg" style="height: 200px">
</div>
<div class="titleC">
 <h1 style="font-weight: bold; font-family: 'Poppins', sans-serif">
PIERCING </h1>


</div>
</div>
<!--cards -->


<div class="cardS">

<div class="image">
   <img src="admin/works/jewel.jpg" style="height: 200px">
</div>
<div class="titleC">
<h1 style="font-weight: bold; font-family: 'Poppins', sans-serif">
BODY JEWELRY</h1>
</div>


</div>




    <div class="cardS">

<div class="image">
   <img src="admin/works/cosmetic.jpg" style="height: 200px">
</div>
<div class="titleC">
<h1 style="font-weight: bold; font-family: 'Poppins', sans-serif">COSMETIC TATTOO</h1>
</div>


</div>

  
    <div class="cardS">

<div class="image">
   <img src="admin/works/smile (19).jpg" style="height: 200px">
</div>
<div class="titleC">
<h1 style="font-weight: bold; font-family: 'Poppins', sans-serif">
TATTOO</h1>


</div>
</div>
</div>

<br />
<br />
<br />

    <div class="section white center">
        <h2 class="header" font-weight="bold" style="color: #826F66">DESIGNS</h2>
    </div>
    
    <br />
    <br />
    <h3 class="header" font-weight="bold">Asyang Tattoo Works</h3>
    <div class="container py-5"  id="asyang">
    <div class="row mt-4">
        <?php
            require 'admin/config/dbcon.php';

            $query = "SELECT image FROM works WHERE shopid='44'";
            $query_run = mysqli_query($con,$query);

            $check_shops = mysqli_num_rows($query_run) > 0;

            if($check_shops)
            {
                while($row = mysqli_fetch_array($query_run))
            
                {
                    ?>
        <div class="col-md-3 mt-3">
            <div class="card" style="width:300px; height:200px">
            <img src="uploads/works/39/<?php echo $row['image']; ?>" width="300px" height="200px" alt="Tattoo Shops"></a>
           
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
<br />
<br />
<br />
<h3 class="header" font-weight="bold">New Tinta Mariveles Works</h3>
    <div class="container py-5"  id="newtinta">
    <div class="row mt-4">
        <?php
            require 'admin/config/dbcon.php';

            $query = "SELECT shopname, image FROM works WHERE shopname='New Tinta Mariveles'";
            $query_run = mysqli_query($con,$query);

            $check_shops = mysqli_num_rows($query_run) > 0;

            if($check_shops)
            {
                while($row = mysqli_fetch_array($query_run))
            
                {
                    ?>
        <div class="col-md-3 mt-3">
            <div class="card" style="width:300px; height:200px">
            <img src="./admin/works/<?php echo $row['image']; ?>" width="300px" height="200px" alt="Tattoo Shops"></a>

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
<br />
<br />
<br />
<h3 class="header" font-weight="bold">Herchel Vape and Ink Works</h3>
    <div class="container py-5">
    <div class="row mt-4">
        <?php
            require 'admin/config/dbcon.php';

            $query = "SELECT shopname, image FROM works WHERE shopname='Herchel VapeAnd Ink'";
            $query_run = mysqli_query($con,$query);

            $check_shops = mysqli_num_rows($query_run) > 0;

            if($check_shops)
            {
                while($row = mysqli_fetch_array($query_run))
            
                {
                    ?>
        <div class="col-md-3 mt-3">
            <div class="card" style="width:300px; height:200px">
            <img src="./admin/works/<?php echo $row['image']; ?>" width="300px" height="200px" alt="Tattoo Shops"></a>

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
<br />
<br />
<br />
<h3 class="header" font-weight="bold">Tintamore Works</h3>
    <div class="container py-5"  id="tintamore">
    <div class="row mt-4">
        <?php
            require 'admin/config/dbcon.php';

            $query = "SELECT shopname, image FROM works WHERE shopname='Tintamore'";
            $query_run = mysqli_query($con,$query);

            $check_shops = mysqli_num_rows($query_run) > 0;

            if($check_shops)
            {
                while($row = mysqli_fetch_array($query_run))
            
                {
                    ?>
        <div class="col-md-3 mt-3">
            <div class="card" style="width:300px; height:200px">
            <img src="./admin/works/<?php echo $row['image']; ?>" width="300px" height="200px" alt="Tattoo Shops"></a>

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

<br />
<br />
<br />
<h3 class="header" font-weight="bold">Smile Tattoo Studio Works</h3>
    <div class="container py-5">
    <div class="row mt-4">
        <?php
            require 'admin/config/dbcon.php';

            $query = "SELECT shopname, image FROM works WHERE shopname='Smile Tattoo Studio'";
            $query_run = mysqli_query($con,$query);

            $check_shops = mysqli_num_rows($query_run) > 0;

            if($check_shops)
            {
                while($row = mysqli_fetch_array($query_run))
            
                {
                    ?>
        <div class="col-md-3 mt-3">
            <div class="card" style="width:300px; height:200px">
           <img src="./admin/works/<?php echo $row['image']; ?>" width="300px" height="200px" alt="Tattoo Shops"></a>

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
<br />
<br />
<br />
<h3 class="header" font-weight="bold">Emerson's Earth Ink Tattoo Works</h3>
    <div class="container py-5">
    <div class="row mt-4">
        <?php
            require 'admin/config/dbcon.php';

            $query = "SELECT shopname, image FROM works WHERE shopname='Emersons Earth Ink Tattoo'";
            $query_run = mysqli_query($con,$query);

            $check_shops = mysqli_num_rows($query_run) > 0;

            if($check_shops)
            {
                while($row = mysqli_fetch_array($query_run))
            
                {
                    ?>
        <div class="col-md-3 mt-3">
            <div class="card" style="width:300px; height:200px">
            <img src="./admin/works/<?php echo $row['image']; ?>" width="300px" height="200px" alt="Tattoo Shops"></a>

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

<br />
<br />
<br />
<h3 class="header" font-weight="bold">Danny Mabatang Ink Works</h3>
    <div class="container py-5">
    <div class="row mt-4">
        <?php
            require 'admin/config/dbcon.php';

            $query = "SELECT shopname, image FROM works WHERE shopname='Danny Mabatang Ink'";
            $query_run = mysqli_query($con,$query);

            $check_shops = mysqli_num_rows($query_run) > 0;

            if($check_shops)
            {
                while($row = mysqli_fetch_array($query_run))
            
                {
                    ?>
        <div class="col-md-3 mt-3">
            <div class="card" style="width:300px; height:200px">
            <img src="./admin/works/<?php echo $row['image']; ?>" width="300px" height="200px" alt="Tattoo Shops"></a>

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

<br />
<br />
<br />
<h3 class="header" font-weight="bold">Baruya's Ink Works</h3>
    <div class="container py-5">
    <div class="row mt-4">
        <?php
            require 'admin/config/dbcon.php';

            $query = "SELECT shopname, image FROM works WHERE shopname='Baruyas Ink'";
            $query_run = mysqli_query($con,$query);

            $check_shops = mysqli_num_rows($query_run) > 0;

            if($check_shops)
            {
                while($row = mysqli_fetch_array($query_run))
            
                {
                    ?>
        <div class="col-md-3 mt-3">
            <div class="card" style="width:300px; height:200px">
            <img src="./admin/works/<?php echo $row['image']; ?>" width="300px" height="200px" alt="Tattoo Shops"></a>

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


<br />
<br />
<br />
<h3 class="header" font-weight="bold">Inkvulnerable Works</h3>
    <div class="container py-5">
    <div class="row mt-4">
        <?php
            require 'admin/config/dbcon.php';

            $query = "SELECT shopname, image FROM works WHERE shopname='Inkvulnerable Tattoo'";
            $query_run = mysqli_query($con,$query);

            $check_shops = mysqli_num_rows($query_run) > 0;

            if($check_shops)
            {
                while($row = mysqli_fetch_array($query_run))
            
                {
                    ?>
        <div class="col-md-3 mt-3">
            <div class="card" style="width:300px; height:200px">
           <img src="./admin/works/<?php echo $row['image']; ?>" width="300px" height="200px" alt="Tattoo Shops"></a>

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