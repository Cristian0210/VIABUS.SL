<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $para = "viabuscostadorada@gmail.com"; // tu correo
    $asunto = "Nuevo mensaje desde la web";

    $contenido = "Nombre: ".$_POST['nombre']."\n";
    $contenido .= "Email: ".$_POST['email']."\n";
    $contenido .= "Teléfono: ".$_POST['telefono']."\n";
    $contenido .= "Servicio: ".$_POST['servicio']."\n\n";
    $contenido .= "Mensaje:\n".$_POST['mensaje'];

    $cabeceras = "From: ".$_POST['email'];

    if(mail($para, $asunto, $contenido, $cabeceras)){
        echo "Mensaje enviado correctamente. Nos pondremos en contacto contigo.";
    } else {
        echo "Error al enviar el mensaje. Inténtalo de nuevo.";
    }
}
?>