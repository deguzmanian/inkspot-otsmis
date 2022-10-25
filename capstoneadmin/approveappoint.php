<?php
    include('admin/config/dbcon.php');

    if ($_POST['phonenum']){
        $approveAppointment = $con->query("SELECT a.serviceid, tp.stocks as stocks FROM `appointment` a left join tattoo_products tp on a.serviceid=tp.serviceid WHERE a.id=".$_POST["id"]."");
        $row = $approveAppointment->fetch_assoc();
        $res = $con->query("UPDATE appointment appoint 
        JOIN tattoo_products tp ON (appoint.serviceid=tp.serviceid) 
        SET appoint.appointment_status='Approved', tp.stocks=tp.stocks-1
        WHERE appoint.id =".$_POST['id']."");

        $dateTime = strtotime($_POST['schedule']);
        $schedule = date('M d, Y, h:i A', $dateTime);
        $message = "Hello!, Greetings  from " . $_POST['shopname'] . "! Your schedule on ".$schedule." has been approved by the admin. See you on the shop!";

        $ch = curl_init();
        $apiKey = "a039de9bf562ebce65e39d4477330e46";
        $parameters = array(
            'apikey' => $apiKey, //Your API KEY
            'number' => $_POST['phonenum'],
            'message' => $message,
           
        );

        curl_setopt( $ch, CURLOPT_URL,'https://semaphore.co/api/v4/messages' );
        curl_setopt( $ch, CURLOPT_POST, 1 );

        // Send the parameters set above with the request
        curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $parameters ) );

        // Receive response from server
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
        $output = curl_exec( $ch );
        curl_close ($ch);

        // Show the server response
        echo $output;
    }
?>