<?php
	$name=$_POST['name'];
	$company=$_POST['company'];
	$email=$_POST['email'];
	$description=$_POST['description'];

	if($name=='' || $company=='' || $email=='' || $description=='')echo "Please, complete all the fields from above.";
	else if(filter_var($email, FILTER_VALIDATE_EMAIL) == false)echo "Please, insert a valid email address!";
	else
	{
		$hash=md5(rand(0,1000));
		$to = $email; // Send email to our user
		$subject = 'Verification'; // Give the email a subject 
		$message = '
		Dear client, thank you for choosing Fomrad!

		In order to proceed with your request, please verify your project details below:

		------------------------
		Full name: '.$name.'
		Company/Organization: '.$company.'
		Project description: '.$description.'
		------------------------

		If all the details are correct, please click this link to confirm your request:
		http://localhost/php/verify.php?email='.$email.'&hash='.$hash.'

		You will be soon contacted by one of our team members to discuss details about your project

		Best wishes,
		Fomrad Team'; // Our message above including the link

		$headers = 'From: noreply@fomrad.com' . "\r\n"; // Set from headers
		
		mail($to, $subject, $message, $headers); // Send our email

		echo "OK";
	}
?>