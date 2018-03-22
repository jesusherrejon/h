<?php
$name       = @trim(stripslashes($_POST['name'])); 
$from       = @trim(stripslashes($_POST['email'])); 
$telefono    = @trim(stripslashes($_POST['telefono'])); 
$message    = @trim(stripslashes($_POST['message'])); 
$to   		= 'ti@kimfly.mx, zhang.yang@hormik.com, alan@pioneroacm.com ';//replace with your email


$cabeceras = 'From: servicio@hormik.mx' . "\r\n" . //La direccion de correo desde donde supuestamente se envió
    'MIME-Version: 1.0' . "\r\n" . //La direccion de correo a donde se responderá (cuando el recepto haga click en RESPONDER)
    'Content-type: text/html; utf-8' . "\r\n" . //La direccion de correo a donde se responderá (cuando el recepto haga click en RESPONDER)
    'X-Mailer: PHP/' . phpversion();  //información sobre el sistema de envio de correos, en este caso la version de PHP


$contenidoCorreo = $name."\r\n"."\r\n"."Con el Email: "."\r\n".$from."\r\n"."\r\n"."Y el telefono"."\r\n".$telefono."\r\n"."\r\n".  "Te ha enviado un mensaje que dice: "."\r\n".$message;



mail($to, "Hormik[Mensaje de el sitio web]", $contenidoCorreo, $cabeceras );


die;