<?php
if($_POST){
  $email = $_POST['email'];
  $name = $_POST['name'];
  $phone_no = $_POST['phone_no'];  
  $object = $_POST['objet'];
  $message = $_POST['message'];

  $headers = "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
  $headers .= "From: $name <$email>\r\nReply-to : $name <$email>\nX-Mailer:PHP";

  $subject="$objet";
  $destinataire="fredymoz@gmail.com";
  $body="$message";

  if(mail($destinataire,$subject,$body,$headers)) {
    $response['status'] = 'success';
    $response['msg'] = 'Su consulta fue enviada';
  } else {
    $response['status'] = 'error';
    $response['msg'] = 'Algo salió mal';
  }

  echo json_encode($response);
}
?>
