<?php
    include('authentication.php');

    $output='';

    if(isset($_POST['query'])){
        $search = $_POST['query'];
        $stmt=$con->prepare("SELECT * FROM tattooshops WHERE name LIKE 
        CONCAT('%',?,'%') OR location LIKE CONCAT('%',?,'%')");
        $stmt->bind_param("ss",$search,$search);
    }else{
        $stmt=$con->prepare("SELECT * FROM tattooshops");

    }
    $stmt->execute();
    $result=$stmt->get_result();

    if($result->num_rows>0){
        $output = "<thead>
                    <tr style='background-color: #FFB200; text-align: center; font-size: 14px'>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact Number</th>
                        <th>Description</th>
                        <th>Location</th>
                    </tr>
                </thead>
                <tbody>";
                    while($row=$result->fetch_assoc()){
                        $output .="
                        <tr>
                            <td>".$row['id']. "</td>
                            <td>".$row['name']. "</td>
                            <td>".$row['email']. "</td>
                            <td>".$row['contact']. "</td>
                            <td>".$row['description']. "</td>
                            <td>".$row['location']. "</td>
                            
                        </tr>";
                    }
                    $output .="</tbody>";
                    echo $output;
    }
    else
    {
        echo "<h3>No record found!</h3>";
    }


?>