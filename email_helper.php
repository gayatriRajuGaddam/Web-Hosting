<?php
require 'vendor/autoload.php'; // If you're using Composer (recommended)

function send_mail($to,$to_name,$subject,$content){


	$email = new \SendGrid\Mail\Mail();
	$email->setFrom("gayatrigaddam26@gmail.com","Gayati Gaddam");
	$email->setSubject($subject);
	$email->addTo($to, $to_name);
	$email->addContent(
		"text/html", $content
	);
	$sendgrid = new \SendGrid("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");
	try {
		$response = $sendgrid->send($email);
        print_r($response);

	} catch (Exception $e) {
        print_r($e->getMessage());
		
	}
}
send_mail("rajashrikumbhare70@gmail.com","Rajashri","Remailder Mail","Test");
