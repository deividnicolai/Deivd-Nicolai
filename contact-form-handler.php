<?php
	$name = $_Post['nombre'];
	$visitor_email = $_Post['email'];
	$message = $_Post['mensaje'];
	
	$email_from = 'link de la pagina';
	
	$email_subject = "nuevo mensaje";
	
	$email_body = "Nombre: $name.\n".
					"Email: $visitor_email.\n".
						"Mensaje: $message.\n";
	
	$to = "licdavidnicolas@gmail.com";
	
	$headers = "From: $email_from \r\n";
	
	$headers .= "Reply-To: $visitor_email \r\n";
	
	mail($to,$email_subject,$email_body,$headers);
	
	header("location index.html"):
	
	
	?>