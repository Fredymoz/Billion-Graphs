<?php

if($_POST){
$errorMSG = "";	  $email = $_POST['email'];

  $name = $_POST['name'];
// NAME	  $phone_no = $_POST['phone_no'];  
if (empty($_POST["name"])) {	  $object = $_POST['objet'];
    $errorMSG = "Name is required ";	  $message = $_POST['message'];
} else {	
    $name = $_POST["name"];	  $headers = "MIME-Version: 1.0\r\n";
}	  $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";

  $headers .= "From: $name <$email>\r\nReply-to : $name <$email>\nX-Mailer:PHP";
// EMAIL	
if (empty($_POST["email"])) {	  $subject="$objet";
    $errorMSG .= "Email is required ";	  $destinataire="fredymoz@gmail.com";
} else {	  $body="$message";
    $email = $_POST["email"];	
}	  if(mail($destinataire,$subject,$body,$headers)) {

    $response['status'] = 'success';
// MSG Guest	    $response['msg'] = 'Su consulta fue enviada';
if (empty($_POST["guest"])) {	  } else {
    $errorMSG .= "Subject is required ";	    $response['status'] = 'error';
} else {	    $response['msg'] = 'Algo salió mal';
    $guest = $_POST["guest"];	  }

  echo json_encode($response);
}	}

?>