<?php

$name = stripslashes($_POST["name"]);
$email = stripslashes($_POST["email"]);
$direccion = stripslashes($_POST["direccion"]);
$distrito = stripslashes($_POST["distrito"]);
$referencia = stripslashes($_POST["referencia"]);
$telefono = stripslashes($_POST["telefono"]);
$message = stripslashes($_POST["message"]);

$recaptcha = $_POST["g-recaptcha-response"];

$url = "https://www.google.com/recaptcha/api/siteverify";
$data = array(
	"secret" => "6Ldjp7UUAAAAALtTekKBLlyf3k1271qwsrf32ucV",
	"response" => $recaptcha
);
$options = array(
	"http" => array (
		"method" => "POST",
		"content" => http_build_query($data)
	)
);
$context  = stream_context_create($options);
$verify = file_get_contents($url, false, $context);
$captcha_success = json_decode($verify);
if ($captcha_success->success) {
		
		//datos de correo

	$cabeceras  = "MIME-Version: 1.0\r\n"; 
	$cabeceras .= "Content-type: text/html; charset=utf-8\r\n";
	$cabeceras .= "From: Mensaje desde la WEB CARMONTI <carlossilva@carmontiperu.com>\r\n";

	$titulo = "Mensaje desde la Web de CARMONTI";
	$correo= "desarrollo@geodreamspro.com, carlossilva@carmontiperu.com";
	/*$correo= "desarrollo@geodreamspro.com";*/

	$asunto="Envio desde formulario web de la pagina de GARDEN";

	$mensaje="Nombre:" . $name . "<br>";
	$mensaje.="Email: " . $email . "<br>";
	$mensaje.="Direccion: " .$direccion."<br>";
	$mensaje.="Distrito: " .$distrito."<br>";
	$mensaje.="Referencia: " .$referencia."<br>";
	$mensaje.="Telefono: " .$telefono."<br>";
	$mensaje.="Mensaje: " .$message."<br>";
	
		mail($correo,$titulo, $mensaje, $cabeceras );
		header("Location: http://carmontiperu.com/gracias.html"); 
		

} else {
	echo "Regresa, no le diste a la casilla de verificación";
}
	