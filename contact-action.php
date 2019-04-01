<?php
if (isset($_POST['send'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['msg'];

    require("vendor/PHPMailer/class.phpmailer.php");
    $mail = new PHPMailer;

    // Sender
    $mail->setFrom("noreply@aureummyr.co", "Aureum Myanmar");

    // Receiver
    $mail->addAddress('piyapongrot@hotmail.com');

    // CC emails
    // $mail->addCC('email_cc@mail.com');

    // BCC emails
    // $mail->addBCC('email_bcc@mail.com');

    $mail->isHTML(true);

    $mail->Subject = "Enquiry - " . $subject;

    // Email content
    $msg = '<h3></h3>Enquiry from Contact Us form</h3>';
    $msg .= '<p><b>Subject</b>: ' . $subject . '</p>';
    $msg .= '<p><b>Full name</b>: ' . $fullname . '</p>';
    $msg .= '<p><b>Email</b>: ' . $email . '</p>';
    $msg .= '<p><b>Message</b>: ' . $message . '</p>';

    $mail->Body = $msg;

    if(!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;

        echo "<meta http-equiv='refresh' content='5; url=contact-us.html'>";
    } else {
        echo "<meta http-equiv='refresh' content='0; url=contact-thank-you.html'>";
    }

}