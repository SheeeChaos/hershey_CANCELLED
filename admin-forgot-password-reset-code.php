<?php

include('config/config.php'); // Update the path to include the config.php file
ob_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

function send_password_reset($get_username, $get_email, $token)
{
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'storeheshey@gmail.com';
        $mail->Password = 'apwg xaes lfwh srab';
        $mail->SMTPSecure = "tls";
        $mail->Port = 587;

        //Recipients
        $mail->setFrom('storeheshey@gmail.com', "Hershey's Store");
        $mail->addAddress($get_email);

        //Content
        $mail->isHTML(true);
        $mail->Subject = 'Change Password Link';
        $mail->Body = 'Here is the verification link <b><a href="http://localhost/hershey/admin-change-password.php?token='.$token.'">http://localhost/hershey/admin-change-password.php?token='.$token.'</a></b>';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

if (isset($_POST['password_reset_link'])) {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $token = md5(rand());

    $check_email = "SELECT email, username FROM admins WHERE email='$email' LIMIT 1";
    $check_email_run = mysqli_query($conn, $check_email);

    if (mysqli_num_rows($check_email_run) > 0) {

        $row = mysqli_fetch_assoc($check_email_run);
        $get_username = $row['username']; // column from database
        $get_email = $row['email']; // column from database

        $update_token = "UPDATE admins SET verify_token = '$token' WHERE email = '$get_email' LIMIT 1";
        $update_token_run = mysqli_query($conn, $update_token);

        if ($update_token_run) {
            send_password_reset($get_username, $get_email, $token); //FUNCTION FOR SEND PASSWORD RESET
            $_SESSION['status'] = "We emailed you the password reset";
            header("Location: adminforgotpassword.php");
            exit(0);
        } else {
            $_SESSION['status'] = "Something went wrong";
            header("Location: adminforgotpassword.php");
            exit(0);
        }
    } else {
        $_SESSION['status'] = "No Email Found";
        header("Location: adminforgotpassword.php");
        exit(0);
    }
}
?>
