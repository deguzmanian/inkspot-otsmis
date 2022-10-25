<?php


require 'backends/config.php';
$query = "SELECT * FROM announcements";
$query_run = mysqli_query($conn, $query);
$check_announce = mysqli_num_rows($query_run) > 0;

if($check_announce)
{
    while($row = mysqli_fetch_array($query_run))
    {
        ?>
        
    <div class="col-sm-3">
        <div class="card" style="float:left; width:280px; height:340px; margin-left:10px; font-family: 'Poppins', sans-serif; margin-bottom: 7%">
            <div class="card-body">
                <h6 class="card-title" style="font-weight:bold; font-size:110%; color:black";> <?php echo $row['event']; ?> </h6>
                <br />
                
                 <p class="card-text" style="text-align:center; color: black";>
                    <?php echo $row['dateTime']; ?>
                </p>
                


                    
                <br /> 
                
            </div>
        </div>
    </div>

        <?php
        
    }
}
else
{
    echo "No tattoo shops found";
}

?>