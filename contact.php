<?
$mail_to_send_to = "rayprinz@gmail.com";
$from_email = "rayprinz@gmail.com";
$sendflag = $_REQUEST['sendflag'];    
$name=$_REQUEST['name'];
if ( $sendflag == "send" )
        {
                $subject= "Message subject";
                $email = $_REQUEST['email'] ;
                $message= "\r\n" . "Name: $name" . "\r\n"; //get recipient name in contact form
                $message = $message.$_REQUEST['message'] . "\r\n" ;//add message from the contact form to existing message(name of the client)
                $headers = "From: $from_email" . "\r\n" . "Reply-To: $email"  ;
                $a = mail( $mail_to_send_to, $subject, $message, $headers );
                if ($a)
                {
                     print("Message Sent Successfuly, You Can Send Another One");
                } else {
                     print("Message wasn't sent, please check that you have changed emails in the bottom");
                }
        }
        ?>