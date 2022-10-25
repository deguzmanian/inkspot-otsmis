<?php
$_name = "InkSpot";
$_emailTo = $_POST["email"];
$_subj = "InkSpot account verification code";
$_body = "Your verification code is {$_POST["code"]}";
$_emailFrom = "inkspot123456@gmail.com";

$url = "https://script.google.com/macros/s/AKfycbxksggIlKm3ho3235NfOneD70oKEanDSy3i0Qqg9o6Bk0dTgKfbH42Cxx7lD8mx8NStSw/exec";
$ch = curl_init($url);
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_POSTFIELDS => http_build_query([
        "recipient" => $_emailTo,
        "subject" => $_subj,
        "body" => $_body
    ])
]);

echo curl_exec($ch);



// use PHPMailer\PHPMailer\PHPMailer;

// include "PHPMailer/PHPMailer.php";

// require_once "PHPMailer/PHPMailer.php";
// require_once "PHPMailer/Exception.php";
// require_once "PHPMailer/SMTP.php";




// $mail = new PHPMailer();

// $mail->isSMTP();
// $mail->Host = "smtp.gmail.com";
// $mail->SMTPAuth = true;
// $mail->SMTPDebug = 2; 
// $mail->Username = $_emailFrom;
// $mail->Password = "ink.123456";
// $mail->Port = 587;
// $mail->SMTPAutoTLS = false;
// $mail->SMTPSecure = "tls";
// $mail->SMTPKeepAlive = true;
// $mail->SMTPOptions = array(
//     'ssl' => array(
//     'verify_peer' => false,
//     'verify_peer_name' => false,
//     'allow_self_signed' => true
//     )
//     );

// $mail->isHTML(true);
// $mail->setFrom($_emailFrom, $_name);
// $mail->Subject = ($_subj);
// $mail->Body = $_body;
// $mail->addAddress($_emailTo);

// if($mail->send()) {
//     $status = "success";
//     $response = "Email is sent!";
// } else {
//     $status = "failed";
//     $response = "Something went wrong: <br>{$mail->ErrorInfo}";
// }

// exit(json_encode(array("status" => $status, "response" => $response)));
?>