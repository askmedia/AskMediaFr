<?php
	$send = false;
	
  if (count($_POST)>0) {
    $name=addslashes(strip_tags($_POST["name"]));
    $email=addslashes(strip_tags($_POST["email"]));
    $phone=addslashes(strip_tags($_POST["phone"]));
    $message=addslashes(strip_tags($_POST["message"]));
    $my_email=addslashes(strip_tags($_POST["my_email"]));
    $object_email=addslashes(strip_tags($_POST["object_email"]));
    
    if(!empty($name))
    $field .= "<strong>User: </strong>$name<br />\n";
    if(!empty($email))
    $field .= "<strong>Email: </strong>$email<br />\n";
    if(!empty($phone))
    $field .= "<strong>Phone: </strong>$phone<br />\n";
    
    
    $recipient  	= "$my_email";
    $object 			= "Request from :: $object_email";
    $htmlmessage 	= <<<MESSAGE
    <html>
    	<head>
     		<title>Request from :: $object_email</title>
    	</head>
	    <body>
	      <style>body {font: 12px/1.2em Verdana}</style>
	      $field
	      <p><strong>Message: </strong>$message</p>
	    </body>
    </html>
MESSAGE;

    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\n";
    $headers .= "From: $name <$email>\n";
    if(mail($recipient, $object, $htmlmessage, $headers)){
      $send = true;
    }
  }
  echo json_encode($send);