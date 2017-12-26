<?php
if(isset($_POST['submit'])){
	$emailAddress = "dburksgtr@gmail.com"; //Email address
	$senderAddress = $_POST['email']; // Sender's email address
	$firstName= $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$subject = "Questions/Comments?";
	$subject2 = "Copy of your form submission";
	$message = $firstName . " " . $lastName . " wrote the following: " . "\n\n" . $_POST['message'];
	$message2 = "Here is a copy of your message " . $firstName . "\n\n" . $_POST['message'];
	
	$headers = "From:" . $emailAddress;
	$headers2 = "From:" . $senderAddress;
	mail($emailAddress,$subject,$message,$headers);
	mail($senderAddress,$subject2,$message2,$headers2); // sends a copy of the message to the senders address
	echo "Mail sent. Thank you " . $firstName . ", we will contact you shortly.";
	
?>