<?php

include('authentication.php');
if(isset($_POST['input'])){

    $input = $_POST['input'];

    $query = "SELECT * FROM tattooshops WHERE name LIKE '{$input}%' OR location LIKE '{$input}%'";

    $result = mysqli_query($con, $query);

    if(mysqli_num_rows($result) > 0){
        ?>
           <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact Number</th>
                        <th>Description</th>
                        <th>Location</th>
                        <th>Image</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($row =mysqli_fetch_assoc($result)){
                            
                            $id = $row['id'];
                            $name = $row['name'];
                            $email = $row['email'];
                            $contact = $row['contact'];
                            $description = $row['description'];
                            $location = $row['location'];
                            $image = $row['image']; 

                            ?>

                            <tr>
                                <td><?php echo $row['id'] ?></td>
                                <td><?php echo $row['name'] ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><?php echo $row['contact'] ?></td>
                                <td><?php echo $row['description'] ?></td>
                                <td><?php echo $row['location'] ?></td>
                                <td><?php echo '<img src="../uploads/'.$row['image'].'" width="80px;" height="80px;"  alt="Tattoo Shops">'?> </td>
                            </tr>

                                <?php
                        }

?>
                        


                </tbody>
            </table>


<?php

    }else{
        echo "<h6 class='text-danger text-center mt-3'>No record found!</h6>";
    }
}

?>