<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$call = $_POST['call'];
$subjectline = $_POST['subjectline'];
$ticket = $_POST['ticket'];
$other = $_POST['other'];
$guest = $_POST['guest'];
$date = $_POST['date'];
$city = $_POST['city'];
$state = $_POST['state'];
$priority = $_POST['priority'];
$message = $_POST['message'];
$formcontent=" From: $name \n Email: $email \n Phone: $phone \n Call Back: $call \n Subjectline: $subjectline \n Ticket: $ticket \n Other Query: $other \n Number Of Guest: $guest \n Expected Travel Date: $date \n City: $city \n State: $state \n Priority: $priority \n Message: $message";
$recipient = "ruhiagr64@gmail.com";
$subject = "Enquiry Form For Ticket";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You for your query, We will get back to you shortly!!";
?>