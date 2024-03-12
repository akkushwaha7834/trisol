<?php 
if(isset($_POST['submit'])){
    $email_to = "akkushwaha018@gmail.com"; // this is your Email address
    $from = $_POST['email'];
    $name = $_POST['name'];
    $mobile = $_POST['phone'];
    $customer_query = $_POST['messagee'];

    $subject = "Book OPD at ₹ 99";
    $message = "Name:- ". $name . "\n\n" . "Email:- ". $from. "\n\n" . "Mobile Number:- " . $mobile. "\n\n". "Query:- ".$_POST['customer_query'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $email_to;
    mail($email_to,$subject,$message,$headers);
    // echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    header('Location: thank-you.html');
    }
?>