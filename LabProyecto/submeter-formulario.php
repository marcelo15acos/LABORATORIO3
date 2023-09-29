<?php

$destinatario = 'marcelo15gool@gmail.com';


$introducir_nombre = $_POST['introducir_nombre'];
$introducir_email = " From: " . $_POST['introducir_email'];
$introducir_telefono = $_POST['introducir_telefono'];
$introducir_asunto = $_POST['introducir_asunto'];
$introducir_mensaje = $_POST['introducir_mensaje'];

$header = "Enviado desde G&G Dulces Creaciones";
$mensajeCompleto = $introducir_mensaje . "\nAtentamente: " . $introducir_nombre . " " . "($introducir_telefono)";
mail($destinatario, $introducir_asunto, $mensajeCompleto, $header);
echo "<script> alert('Correo enviado correctamente') </script>";
echo "<script> setTimeout(\"location.href='index.html'\",1000) </script>"
?>