<?php 
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once "../../admin/config/dbcon.php";
        $outgoing_id = $_SESSION['unique_id'];
        $incoming_id = mysqli_real_escape_string($con, $_POST['incoming_id']);
        $output = "";
        $sql = "SELECT user.unique_id, shops.name as shopname, messages.incoming_msg_id,
            messages.outgoing_msg_id, messages.msg, messages.msg_id
            FROM messages
            LEFT JOIN user ON user.unique_id=messages.outgoing_msg_id
            LEFT JOIN tattooshops as shops ON shops.id=user.shopid
            WHERE (outgoing_msg_id='$outgoing_id' AND incoming_msg_id='$incoming_id')
            OR (outgoing_msg_id='$incoming_id' AND incoming_msg_id='$outgoing_id')
            ORDER BY msg_id";

        $query = mysqli_query($con, $sql);
        if (mysqli_num_rows($query) > 0) {
            while ($row = mysqli_fetch_assoc($query)) {
                if ($row['outgoing_msg_id'] === $outgoing_id) {
                    $output .= '<div class="chat outgoing">
                                <div class="details">
                                    <p>'. $row['msg'] .'</p>
                                </div>
                                </div>';
                } else {
                    $output .= '<div class="chat incoming">
                                <div class="details">
                                    <p>'. $row['msg'] .'</p>
                                </div>
                                </div>';
                }
            }
        } else {
            $output .= '<div class="text">No messages are available. Once you send message they will appear here.</div>';
        }
        echo $output;
    } else {
        header("location: ../login.php");
    }

?>