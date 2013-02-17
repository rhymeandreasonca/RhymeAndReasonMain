<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<META 
     HTTP-EQUIV="Refresh"
     CONTENT="1; URL=testingreg.html">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>cancelregistration</title>
</head>

<body>
<?php
 $to = "alex@rhymeandreason.ca";
 $subject = "Cancel Registration";
 $body = $email_from;
 if (mail($to, $subject, $body)) {
   echo("<p>Redirecting!</p>");
  } else {
   echo("<p>Redirecting...</p>");
  }
 ?>
 
</body>
</html>