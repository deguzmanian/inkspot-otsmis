<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

body
{
    font-family: 'Poppins', sans-serif;
}
</style>

<form method="POST">
    <p>
        <img src="header/location.png" style="width: 5%; height: 5%; margin-left: 47%" alt="">
        <h2 style="text-align:center">LOCATE SHOPS</h2>
        <input type="text" name="address" placeholder="Enter Address" style="margin-left:42%">
        <input type="submit" name="submit_address">
    </p>

    
</form>



<?php
    if (isset($_POST["submit_address"])){
        $address = $_POST["address"];
        $address = str_replace("","+", $address);
?>
    <iframe width="80%" height="500" title="maps"
    src="https://maps.google.com/maps?q=<?php echo
        $address; ?>&output=embed" style="margin-left: 10%"></iframe>
<?php
    }
?>

