<?php
if(isset($_POST['submit'])){
	$to = "dburksgtr@gmail.com"; //Email address
	$from = $_POST['email']; // Sender's email address
	$firstName= $_POST['first_name'];
	$lastName = $_POST['last_name'];
	$subject = "Form Submission";
	$subject2 = "Copy of your form submission";
	$message = $firstName . " " . $lastName . " wrote the following: " / "\n\n" . $_POST['message'];
	$message2 = "Here is a copy of your message " . $firstName . "\n\n" . $_POST['message'];
	
	$headers = "From:" . $from;
	$headers2 = "From:" . $to;
	mail($to,$subject,$message,$headers);
	mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the senders address
	echo "Mail sent. Thank you " . $firstName . ", we will contact you shortly.";
	
?>