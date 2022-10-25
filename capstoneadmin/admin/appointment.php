<?php
include('authentication.php');
include('includes/header.php');
?>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
  body
  {
    font-family: 'Poppins', sans-serif;
  }
  .cnl{
    background-color: red;
    color: white;
  }
  .cnl:hover, .app:hover {
    background-color: darkgray;
    color: #000;
  }
  .app{
    background-color: green;
    color: white;
  }  
</style>
<div class="container-fluid px-4 mt-4">
  <div id="tb-appointment">
    <h3>Pending Appointments</h3>
    <div class="card-body">
      <table class="table">
        <thead>
          <tr style="background-color: #FFB200">
              <th>Customer name</th>
              <th>Contact number</th>
              <th>Service</th>
              <th>Price</th>
              <th>Affected product</th>
              <th>Date and time</th>
              <?php if($_SESSION['auth_role'] == '1' || $_SESSION['auth_role'] == '3') :  ?>
              <th>Action</th>
              <?php endif; ?>
          </tr>
        </thead>
        <tbody>
          <?php
            // auth role 0 = user
            // auth role 1 = admin or shop
            // auth role 2 = superadmin
            $t = "";
            if($_SESSION['auth_role'] === "1" || $_SESSION['auth_role'] === "3"){
              $t = "AND a.shopid=".$_SESSION["shopId"]."";
            }
            $res = $con->query(
              "SELECT a.id,a.userid, a.shopid, a.appointment_status, a.start_datetime, s.type_services, s.estimated_amount, tp.equipment_name, tp.stocks, concat(u.fname,' ',u.lname) as username,u.phonenumber, tp.serviceid as serviceID, tshop.name as shopname
              FROM `appointment` a
              left join user u on a.userid=u.id 
              left join services s on a.serviceid=s.id
              left join tattooshops tshop on a.shopid=tshop.id
              left join tattoo_products tp on a.serviceid=tp.serviceid
              WHERE a.appointment_status='pending'
            ".$t);

            $combined = [];
            if (is_array($res) || is_object($res) ){
              foreach ($res as $item) {
                $schedule = $item['start_datetime'];
                $equipment = $item['equipment_name'];

                  if (isset($combined[$schedule])) {
                    $combined[$schedule]['equipment_name'] .= ', ' . $equipment;
                  } else {
                    $combined[$schedule] = $item;
                  }
              }

              $combined = array_values($combined);

              if(!empty($combined)){
                foreach($combined as $row) {
                  echo '<tr>
                    <td>'.$row["username"].'</td>
                    <td>'.$row["phonenumber"].'</td>
                    <td>'.$row["type_services"].'</td>
                    <td>&#8369;'.$row["estimated_amount"].'</td>
                    <td>'.$row["equipment_name"].'</td>
                    <td>'.date('M d, Y, h:i A', strtotime($row['start_datetime'])).'</td>
                    <td class="text-center">
                     
                    
                            <button class="btn app" data-id="btn-approveAppntmnt-'.$row['id'].'" title="Approve" onclick="ApproveAppointment('.$row['id'].',\''.$row['phonenumber'].'\',\''.$row['shopname'].'\',\''.$row['start_datetime'].'\')">&#10003;</button>
                            <button class="btn cnl" data-id="btn-cancelappoi-'.$row['id'].'" title="Cancel" onclick="CancelAppointment('.$row['id'].',\''.$row['phonenumber'].'\',\''.$row['shopname'].'\',\''.$row['start_datetime'].'\')">&times;</button>
                 
                    
                            </td>
                  </tr>';
                }
              }
              else {
                echo '<tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td class="text-center">No pending appointment.</td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>';
              }
            }
          ?>
        </tbody>
      </table>
  
  
  
    </div>
  </div>

  <div id="tb-appointmentHistory">
    <h3 class="mt-4">Appointment History</h3>
        
    
    <div class="card-body">
      <table class="table">
        <thead>
          <tr style="background-color: #FFB200">
            <th>Customer Name</th>
            <th>Contact Number</th>
            <th>Service</th>
            <th>Price</th>
            <th>Affected Products</th>
            <th>Date and Time</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
            <?php
              $t = "";
              if($_SESSION['auth_role'] === "1"){
                $t = "AND a.shopid=".$_SESSION["shopId"]."";
              }

              $fetchData = $con->query(
                "SELECT a.id,a.userid,a.shopid,s.type_services,s.estimated_amount,tp.equipment_name, tp.stocks,a.start_datetime,concat(u.fname,' ',u.lname) as name_,u.phonenumber, tp.serviceid, a.appointment_status FROM `appointment` a 
                left join user u on a.userid=u.id 
                left join services s on a.serviceid=s.id
                left join tattooshops t on u.shopid=t.id
                left join tattoo_products tp on a.serviceid=tp.serviceid
                WHERE a.appointment_status!='pending'
              ".$t);
              $historyData = [];

              if (is_array($res) || is_object($res)){
                foreach ($fetchData as $item) {
                    $schedule = $item['start_datetime'];
                    $equipment = $item['equipment_name'];
                    if (isset($historyData[$schedule])) {
                        $historyData[$schedule]['equipment_name'] .= ', ' . $equipment;
                    } else {
                        $historyData[$schedule] = $item;
                    }
                }

                $historyData = array_values($historyData);

                if(!empty($historyData)){
                  foreach($historyData as $data){
                    echo '<tr>
                      <td>'.$data["name_"].'</td>
                      <td>'.$data["phonenumber"].'</td>
                      <td>'.$data["type_services"].'</td>
                      <td>&#8369;'.$data["estimated_amount"].'</td>
                      <td>'.$data["equipment_name"].'</td>
                      <td>'.date('M d, Y, h:i A', strtotime($data["start_datetime"])).'</td>
                      <td>'.$data['appointment_status'].'</td>
                    </tr>';
                  }
                }
                else{
                  echo '<tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="text-center">No history.</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>';
                }
              }
            ?>

            
        </tbody>
      </table>
    </div>
  </div>

  </div>
<script src="./appointment.js"></script>
<?php
include('includes/scripts.php');
?>