<?php
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST ['telefono'];

$header = 'From: ' . $correo . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type; text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",
 con telefono " . $telefono . "\r\n";
$mensaje .= "Su email es: " . $correo . "\r\n";
$mensaje .= "Mensaje: " . $_POST['comentario'] . "\r\n";
$mensaje .= "Enviado el " .date('d/m/y', time ());

$para = 'preyesg33@gmail.com';
$asunto = 'solicitud de informaci&oacute;n';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("location: gracias.html");

?>








