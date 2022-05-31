

<?php
	

 //VALIDACIÓN DE CAMPOS
if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['subject']) || empty($_POST['message']))
{
	echo "<script>alert(\"fill in all the fields\");</script>";
	echo "<script> window.location ='index.html';</script>";

}else{
	
	//RECEPCIÓN DE DATOS
   
    $to = 'info@motazorrilla.com';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
	$message = $_POST['message'];

	//MENSAJE
	$message="
	<b>DATOS DE CONTACTO</b><br>
	Nombre: <b>".$name."</b><br>
	Correo: <b>".$email."</b><br>
	Asunto: <b>".$subject."</b><br><br>
	Mensaje: <b>".$message."</b><br><br>
	<hr>";
  
	//ENVIO DE CORREO
	$header =	'MIME-Version: 1.0' . "\r\n";
	$header .= 	"Content-type: text/html; charset=iso-8859-1\r\n";
	$header .= 	"Content-type: text/html; charset=UTF-8\r\n"; 
	$header .=	"From: www.motazorrilla.com\r\n";

	mail($to, $subject, $message, $header) or die('Hubo un error');	

	
	
	//SCRIPT DE CONFIRMACIÓN
	echo "<script>alert(\"Your message has been sent successfully!\\nThank you for contacting us! \\nWe will respond shortly!\\n\\n|| www.motazorrilla.com ||\");</script>";
	echo "<script> window.location='index.html';</script>";
	}
	
?>
