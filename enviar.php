<?php  

// Llamando a los campos
$nombre = $_POST['name'];
$correo = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['menssage'];

// Datos para el correo
$destinatario = "codytron.info@gmail.com";
$asunto = "Contacto desde nuestra web";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $subject \n";
$carta .= "Mensaje: $message";

// Enviando Mensaje
mail($destinatario, $asunto, $carta);
header('Location:mensaje-de-envio.html');

?>