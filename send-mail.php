<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require "vendor/autoload.php";

if ($_SERVER['REQUEST_METHOD']=="POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $mail = new PHPMailer(true);

    try {
        $mail -> isSMTP();
        $mail -> Host = "smtp.gmail.com";
        $mail -> SMTPAuth = true;
        $mail -> Username = "your_gmail_address";
        $mail -> Password = "your_gmail_app_password";
        $mail -> SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail -> Port = 587;

        $mail -> setFrom("test@test.com", "Aktar");
        $mail -> addAddress("g.smtp.cform@gmail.com", "Zaman");

        $mail -> Subject = "New Contact Form Submission";
        $mail -> Body = "Name: $name\n".
                        "Email: $email\n".
                        "Message: $message";
        if($mail -> send()){
            echo "Message sent successfully";
        }else{
            echo "Message could not be sent, Error: " . $mail->ErrorInfo; 
        }

    } catch (Exception $e) {
        echo "Message could not be sent, Error: " . $mail->ErrorInfo; 
    }
    
}
?>
