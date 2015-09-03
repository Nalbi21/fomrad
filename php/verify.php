<?php
	if(isset($_GET['email']) && isset($_GET['hash']) && !empty($_GET['email']) && !empty($_GET['hash']))
	{
    	require_once('database_connection.php');
		$conn = new mysqli($servername, $usn, $psw,$database);
		if($conn->connect_errno)echo 'We are sorry, but a problem occured while processing your request. Please, try again!';
		else
		{
			$email = $_GET['email']; // Set email variable
    		$hash = $_GET['hash']; // Set hash variable
			$query="SELECT id,email,description,hash,verified from requests where email='$email' AND hash='$hash'";
			$result=$conn->query($query);
			if(!$result->num_rows) echo 'It seems that the provided link is not correct. Your details do not exist in our databases. Please, try to make a new request on our website. We are sorry for the inconvenience.';
			else
			{
				$row=$result->fetch_assoc();//result is unique;
				$description=$row["description"];
				$id=$row["id"];
				$verified=$row["verified"];
				$result->free();

				if($verified==1)echo 'The link was already accessed. Please, be patient. Our staff will get in touch with you soon.';
				else
				{
					$verified=1;
					$query="UPDATE requests SET verified='$verified' WHERE id='$id'";
					$conn->query($query);

					$to = 'projects@fomrad.com'; // Send email to the team
					$subject = 'New project'; // Give the email a subject 
					$message = '
					Guys, a new project waits for us!

					Please verify the project details below:

					------------------------
					'.$description.'
					------------------------

					If the details seem alright, please get in touch with the client as soon as possible.

					FOMRAD 
					'; // Our message above including the link

					$headers = 'From: noreply@fomrad.com' . "\r\n"; // Set from headers
		
					mail($to, $subject, $message, $headers); // Send our email

					echo 'Thanks for choosing Fomrad. Our staff will get in touch with you as soon as possible :D. Check your email soon!';
				}
			}
		}
	}
	else{
    	echo 'The link is invalid. Please, try again!';
	}
	$conn->close();
?>