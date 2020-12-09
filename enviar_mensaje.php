<?php
$nombre_form=$_POST ['nombre'];
$apellido_form=$_POST ['apellido'];
$correo_form=$_POST ['correo'];
$motivo_form=$_POST ['motivo'];
$mensaje_form=$_POST ['mensaje'];

$cuerpo_mail="Nombre: ".$nombre_form."\r\n"."Apellido: ".$apellido_form."\r\n"."email: " .$correo_form."\r\n"."Motivo: ".$motivo_form."\r\n"."Mensaje: ".$mensaje_form; 

@mail ("mailrecepcion@gmail.com", "mensaje enviado desde wwww", $cuerpo_mail);


header ("location: contacto.php?e=Mensaje_exitoso");



?>