<div class="containerProfile">
<div class="row">
<div class="info">
<?php
$query = "SELECT * FROM users";
$query_run = mysqli_query($con, $query);

$check_shops = mysqli_num_rows($query_run) > 0;

if($check_shops)
{
    while($row = mysqli_fetch_array($query_run))

    {
        ?>
<div class="col-md-3 mt-3">
<div class="card" style="width:600px; height:350px">black
    <div class="card-body">
        <h5 class="card-title" style="color: black; font-size:20px"><strong style="color: black">Email: </strong><?php echo $row['email'];?> </h5>
        <h5 class="card-title" style="color: black;font-size: 20px"><strong style="color: black">Contact Number: </strong><?php echo $row['contact']; ?> </h5>
        <h5 class="card-title" style="color: black; font-size:20px"><strong style="color: black">Available Schedule: </strong><?php echo $row['schedule'];?> </h5>
        <h5 class="card-title" style="color: black;font-size: 20px"><strong style="color: black">Followers: </strong><?php echo $row['followers']; ?> </h5>
        <h5 class="card-title" style="color: black; font-size:20px"><strong style="color: black">Description: </strong><?php echo $row['description'];?> </h5>
        <h5 class="card-title" style="color: black;font-size: 20px"><strong style="color: black">Location: </strong><?php echo $row['location']; ?> </h5>

        </p>
    </div>
</div>
<br />
<div class="location">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3858.003670288877!2d120.53833368927752!3d14.768823344054683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x339642108f0f3ed1%3A0xe8ef1df7461338ca!2sAsyang%20Tattoo%20Shop!5e0!3m2!1sen!2sph!4v1655544130517!5m2!1sen!2sph" 
    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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