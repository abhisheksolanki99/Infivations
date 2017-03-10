<?php

function mymailsend($firstname, $lastname, $email, $subject, $message) {
    require_once('assets/MailFiles/class.phpmailer.php');
    $mail = new PHPMailer(); // defaults to using php "mail()"
    $mail->IsSMTP(); // telling the class to use SMTP
    //$mail->Host       = "mail.yourdomain.com"; // SMTP server
    $mail->SMTPDebug = 2;                     // enables SMTP debug information (for testing)
    // 1 = errors and messages
    // 2 = messages only
    $mail->SMTPAuth = true;                  // enable SMTP authentication
    $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
    $mail->Host = "smtp.gmail.com";      // sets GMAIL as the SMTP server
    $mail->Port = 465;                   // set the SMTP port for the GMAIL server
    $mail->Username = "infivations@gmail.com";  // GMAIL username
    $mail->Password = "Infivations@123";            // GMAIL password
    $mail->AddReplyTo("infivations@gmail.com", "Inquiry");
    $mail->SetFrom('infivations@gmail.com', 'Inquiry');
    $address = 'infivations@gmail.com';
    $mail->AddAddress($address, "Infivations");
    $mail->Subject = 'New Inquiry Received';
    $firstname = $firstname;
    $lastname = $lastname;
    $email = $email;
    $subject = $subject;
    $message = $message;
    $mail->MsgHTML('FirstName : ' . $firstname . "\n" . 'LastName : ' . $lastname . "\n" . 'Email : ' . $email . "\n" . 'Subject : ' . $subject . "\n" . 'Message : ' . $message . "\n");
    $msg = "";
    if (!$mail->Send()) {
        echo "Mail not send ERROR" . $mail->ErrorInfo;
    } else {
        
    }
}

?>