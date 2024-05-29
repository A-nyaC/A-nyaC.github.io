<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$fullname=' '; 
$email= '';
$subject ='';
$comment =' ';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $comment = $_POST["comment"];

    $to= "carran@kean.edu";

    $headers = "From: ". $email . "\r\n";

    if (mail($to, $subject, $comment, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Failed to send email.";
    }

}


#mail($to,$subject,$comment,$headers);

?>