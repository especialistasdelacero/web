<?php

if (isset($_POST['Enviar Mensaje'])) {
    if (!empty($_POST['nombre']) && !empty($_POST['correo']) && !empty($_POST['telefono']) && !empty($_POST['mensaje'])) {
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $telefono = $_POST['telefono'];
        $mensaje = $_POST['mensaje'];
        $header = "From: edwin.poluco@gmail.com" . "/r/n/";
        $header = "Reply-To: edwin.poluco@gmail.com" . "/r/n/";
        $header = "X-Mailer: PHP/" . phpversion();
        $correo = @mail($correo,$correo,$telefono,$mensaje);
        if ($correo) {
            echo "<h4>; Mail enviado exitosamente!</h4>";
        }


    }
}