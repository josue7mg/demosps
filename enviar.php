<?php  

// Llamando a los campos
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];
$name = $_POST["plan"];

// Datos para el correo
$destino = "smartprojectstudio@gmail.com";
$asunto = "Contacto desde nuestra web";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Plan: $plan \n";
$carta .= "Mensaje: $mensaje";

// Enviando Mensaje
mail($destino, $asunto, $carta);
header("Location:mensaje-enviado.html");

?>