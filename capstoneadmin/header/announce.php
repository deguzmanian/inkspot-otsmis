<div class="container" style="width: 300px; background-color: #F9E4D4; height: 1000px; margin-left: 150%">
<h2 style="color: #534340; font-family: 'Poppins', sans-serif">Tattoo Shops Announcements</h2>
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
        
            <div class="card" style="width:300px; height:170px; text-align:left">
            
                <div class="card-body" style=" font-family: 'Poppins', sans-serif; font-size: 15px">
                    <h5 class="card-title" style="color: black">Shop Name: <?php echo $row['shopname']; ?> </h5> 
                    <h5 class="card-title" style="color: black">Event: <?php echo $row['event']; ?> </h5>
                    <p class="card-text" style="color: black; font-size: 13px; margin-right:50%">Date and Time: <?php echo $row['dateTime']; ?>
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
<style>
     
</style>