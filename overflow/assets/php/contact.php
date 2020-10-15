<?php
    $message_sent = false;
    if(isset($_POST['email' ]) && $_POST['email'] != '') {

        $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);

        $mailFrom = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        
        $message = $_POST['messsage'];

        $tempEmail = "eddieswim101@gmail.com";
        $body = "";

        //Make body
        $body .= "From: " .$name. "\r\n";
        $body .= "Email: ".$mailFrom. "\r\n";
        $body .= "Message" .$message. "\r\n";

        // Send Email
       mail($tempEmail, "Photography Request!!", $body, );
       $message_sent = true;
    }
?>