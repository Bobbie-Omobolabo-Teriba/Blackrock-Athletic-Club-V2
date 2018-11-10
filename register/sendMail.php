<?php //
//
//$firstname = filter_input(INPUT_POST, "firstname");
//$lastname = filter_input(INPUT_POST, "lastname");
//$email = filter_input(INPUT_POST, "email");
//$phone = filter_input(INPUT_POST, "phone");
//$messageInput = filter_input(INPUT_POST, "message");
//
//
//$to      = 'bobbieteriba@gmail.com';
//$subject = 'Info';
//$message = $messageInput . "\r\n" .
//        'Phone Number:'. $phone;
//$headers = 'From:' .$email . "\r\n" .
//    'Reply-To:'. $email . "\r\n" .
//    'X-Mailer: PHP/' . phpversion();
//
//mail($to, $subject, $message, $headers);
//?> 

<?php

$firstname = filter_input(INPUT_POST, "firstname");
$lastname = filter_input(INPUT_POST, "lastname");
$email = filter_input(INPUT_POST, "email");
$phone = filter_input(INPUT_POST, "phone");
$messageInput = filter_input(INPUT_POST, "message");

$comment = "Your payment is confirmed." . "\r\n"
        . "For " . $messageInput . "'s album : " . $messageInput . "\r\n"
        . " Thank you for your order. " . $phone;

ini_set("SMTP","smtp.gmail.com"); 
ini_set("smtp_port","587");

$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type: text/html; charset=iso-8859-1";
$headers[] = "To: Backstage <bobbieteriba@gmail.com>";
$headers[] = "From: $firstname $lastname <$email>";
$headers[] = "Cc: bobbieteriba@gmail.com";
$headers[] = "Bcc: bobbieteriba@gmail.com";

mail($email, $messageInput, $comment, implode("\r\n", $headers));

