<?php
if(isset($_POST['email'])){
    print_r($_POST);
    $to = "supreetsingh.247@gmail.com"; // this is your Email address
    $from = "supreetsingh.247@gmail.com"; // this is the sender's Email address
    $first_name = "First_name";
    $last_name = "Last_Name";
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    }
?>
