<?php
if(isset($_POST['email'])){
    print_r($_POST);
    $email = $_POST['email'];
    $to = "supreetsingh.247@gmail.com"; // this is your Email address
    $to2 = "ask@insolergy.com";
    $from = $email; // this is the sender's Email address
    $first_name = "First_name";
    $last_name = "Last_Name";
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = "A new contact found!" . $_POST['message'] . $email;
    $message2 = "Thank you for contacting the Insolergy Team. We will contact you shortly :)";

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($to2,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you. We will contact you shortly.";
    }
?>