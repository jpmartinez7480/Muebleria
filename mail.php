<?php
	$name = $_POST['name'];	
	$telefono = $_POST['phone'];
	$mail = $_POST['email'];
	$mensaje = $_POST['mensaje'];
	mailCliente($email);
	mailEjecutivo($name,$telefono,$mail,$mensaje);
	
	function mailCliente($mail){
		$destinatario = $mail; 
		$asunto = "Muebleria Estadio de la U"; 
		$cuerpo = ' 
		<html> 
		<head> 
		   <title>Contacto Estadio de la U</title> 
		</head> 
		<body>
		<h3>Su mensaje ha sido recibido, nos contactaremos a la brevedad con ud.</h3>  
		</body> 
		</html> 
		'; 
		
		//para el envío en formato HTML 
		$headers = "MIME-Version: 1.0\r\n"; 
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
		
		//dirección del remitente 
		$headers .= "From: Estadio de la U - Huaso <jpmartinez7480@gmail.com>\r\n"; 
		
		//direcciones que recibirán copia oculta 
		if(mail($destinatario,$asunto,$cuerpo,$headers)){
			$ok = 'si';	
		}else{
			$ok = 'no';
		}
	}
	function mailEjecutivo($name,$telefono,$mail,$mensaje){
		$destinatario = 'jpmartinez7480@gmail.com';
		$asunto = "Muebleria Estadio de la U - Contacto Web"; 
		$cuerpo = ' 
		<html> 
		<head> 
		   <title>Estadio de la U</title> 
		</head> 
		<body>
			<h3>Se ha recibido un nuevo mensaje</h3>
			<p>Nombre: '.$name.' <br>
			Tel&eacute;fono: '.$telefono.'<br>
			E-mail: '.$mail.'<br>
			Mensaje: '.$mensaje.'
		</body> 
		</html> 
		'; 
		
		//para el envío en formato HTML 
		$headers = "MIME-Version: 1.0\r\n"; 
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
		
		//dirección del remitente 
		$headers .= "From: Estadio de la U - Huaso <jpmartinez7480@gmail.com>\r\n"; 
		
		//direcciones que recibirán copia oculta 
		if(mail($destinatario,$asunto,$cuerpo,$headers)){
			echo 'si';
		}else{
			echo 'no';
		}
	}
	
?>