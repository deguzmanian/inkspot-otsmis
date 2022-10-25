<?php
    while ($row=mysqli_fetch_assoc($query)) {
        $sql2 = "SELECT * FROM `messages`
        WHERE (incoming_msg_id='".$row['unique_id']."' OR outgoing_msg_id='".$row['unique_id']."')
        AND (outgoing_msg_id='$outgoing_id' OR incoming_msg_id='$outgoing_id')
        ORDER BY msg_id DESC";
        $query2 = mysqli_query($con, $sql2);
        $row2 = mysqli_fetch_assoc($query2) > 0;

        $result='View conversation.';
        (strlen($result) > 28) ? $msg =  substr($result, 0, 28) . '...' : $msg = $result;
        if (isset($row2['outgoing_msg_id'])) {
            ($outgoing_id == $row2['outgoing_msg_id']) ? $you = "You: " : $you = "";
        } else {
            $you = "";
        }

        $user_role = $_SESSION['role_as'];
        if ($user_role != "0") {
            $userName = $row['fname'] ." ". $row['lname'];
        }else {
            $userName =  $row['shopname'];
        }

        $output .= '<a href="chat.php?user_id='. $row['unique_id'] .'">
            <div class="content">
            <div class="details">
                <span>'. $userName .'</span>
                <p>'. $you . $msg .'</p>
            </div>
            </div>
        </a>';
    }
?>

