<?php
    $destinatario = 'fredymoz@gmail.com';
    //esto es el correo al que se va a enviar el correo
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $mensaje = $_POST['mensaje'];

    $header = "Enviado desde Billion Graphs";
    $mensajeCompleto = $mensaje . "\Atentamente: " . $nombre;

    mail($destinatario, $email, $mensajeCompleto,$header);
    echo "<script>alert('Correo enviado exitosamente')</script>";
    echo "<script>setTimeout(\"location.href='index.html'\",1000)</script>"; 


?>