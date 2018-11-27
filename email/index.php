<?php
 if(isset($_POST['submit']))
 {
    $name = $_POST['name'];
	$email = $_POST['email'];
	$query = $_POST['message'];
	$email_from = $name.'<'.$email.'>';

 $to="pedidos@yesosdelcaribe.com.co";
 $subject="Nuevo mensaje de yesosdelcaribe.com.co";
 $headers  = 'MIME-Version: 1.0' . "\r\n";
 $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
 $headers .= "From: ".$email_from."\r\n";
 $message="	  
 	   
 		 Nombre:
		 $name 	   
         <br>
 		 Email:
		 $email
         <br>
 		 Mensaje:
		 $query  
      
   ";
     
	if(mail($to,$subject,$message,$headers))
		header("Location:../contacto.php?msg=El mensaje ha sido enviado, gracias por contactarnos.");
	else
		header("Location:../contacto.php?msg=Error To send Email !");
		//contact:-your-email@your-domain.com
 }
?>
