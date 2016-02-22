<?php

if( isset($_POST['email']) ) {

    $email      = $_POST["email"];
    $target     = 'maxwell@goodposture.us';

    $email_message = '';
    $header = 'From: '. $name .' <'. $email .'>' . "\r\n";
    function clean_text($string) {
        $bad = array("content-type","bcc:","to:","cc:","href");
        return str_replace($bad,"",$string);
    }
    $email_message .= "Name: ".clean_text($name)."\n";
    $email_message .= "Email: ".clean_text($email)."\n";
    $email_message .= "Message: ".clean_text($message)."\n";

    if(mail($target, $subject, $email_message, "From: $email\r\nReply-To: $email\r\nReturn-Path: $email\r\n","-f $target"))
    {
        echo 'Message Sent Successfully!';
    }
    else
    {
        echo 'Server Error: Mailing Method Failed!';
    }
	
}

?>