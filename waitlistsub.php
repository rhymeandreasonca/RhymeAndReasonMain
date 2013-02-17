<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<META 
     HTTP-EQUIV="Refresh"
     CONTENT="3; URL=index.html">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Waitlist Submission</title>
</head>

<body>
<?php

    $email_to = "worldvsrichard@gmail.com";
    $email_subject = "Rhyme and Reason Waitlist";


if(!isset($_POST['email']) ||
   !isset($_POST['classchoice'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
	
	$email_from   = $_POST['email'];
    $class_choice = $_POST['classchoice']; 

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "New WAITLIST addition.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Class: ".clean_string($class_choice)."\n";
	
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  

 ?>
 <p>Thank you, we will now redirect you back to the homepage...</p>
</body>
</html>