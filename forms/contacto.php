<?php

  $receiving_email_address = 'edwin.poluco@gmail.com';

  if( file_exists($php_email_form = '../assets/archivos/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contacto = new PHP_Email_Form;
  $contacto->ajax = true;
  
  $contacto->to = $receiving_email_address;
  $contacto->from_name = $_POST['nonbre'];
  $contacto->from_email = $_POST['correo'];
  $contacto->telefono = $_POST['telefono'];
  $contacto->from_mensaje = $_POST['mensaje'];



  $contacto->add_message( $_POST['name'], 'nombre');
  $contacto->add_message( $_POST['Email'], 'correo');
  $contacto->add_message( $_POST['telefono'], 'telefono');
  $contacto->add_message( $_POST['mensaje'], 'mensaje', 10);

  echo $contacto->send();
?>
