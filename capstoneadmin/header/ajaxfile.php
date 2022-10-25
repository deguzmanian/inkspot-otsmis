<?php
include('admin/config/dbcon.php');
 
$userid = $_POST['userid'];
 
$sql = "select * from tattooshops where id=".$userid;
$result = mysqli_query($con,$sql);
while( $row = mysqli_fetch_array($result) ){
?>
<table border='0' width='100%'>
<tr>
    <td width="300"><img src="uploads/<?php echo $row['image']; ?>">
    <td style="padding:20px;">
    <p>Shop Name : <?php echo $row['name']; ?></p>
    <p>Description : <?php echo $row['description']; ?></p>
    <p>Location : <?php echo $row['location']; ?></p>
    </td>
</tr>
</table>
 
<?php } ?>