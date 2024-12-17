<?php


  
  $receiving_email_address = 'edwin.poluco@gmail.com';

  if( file_exists($php_email_form = '../assets/archivos/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $cotizar = new PHP_Email_Form;
  $cotizar->ajax = true;
  
  $cotizar->to = $receiving_email_address;
  $cotizar->from_name = $_POST['nombre'];
  $cotizar->from_email = $_POST['correo'];
  $cotizar->subject = 'telefono';
  $cotizar->from_name = $_POST['mensaje'];



  $cotizar->add_message( $_POST['name'], 'nombre');
  $cotizar->add_message( $_POST['Email'], 'correo');
  $cotizar->add_message( $_POST['telefono'], 'telefono');
  $cotizar->add_message( $_POST['mensaje'], 'mensaje', 10);

  echo $cotizar->send();
?>
