<!DOCTYPE html>
<html lang="en">
<head>
        <link rel="shortcut icon" type="text/css" href="Images/favicon.ico">
        <link rel="stylesheet" type="text/css" href="main.css" />
        <script type="text/javascript" src="main.js"></script>
            <script type="text/javascript" src="classes.js"></script>
    <script type="text/javascript" src="include.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <meta name="Classification" content="business">
        <meta name="description" content="Rhyme and Reason is a new Calgary-based early literacy and numeracy program for infants ages 0-8 months and 8-24 months. Our eight or ten week programs use fun, high-energy songs, stories, and activities to give your child the foundation they need to succeed when they reach school-age.">
        <meta name="keywords" content="rhyme, reason, early literacy, early numeracy, literacy, numeracy, baby programs, infant programs, calgary infant classes, calgary baby classes, calgary, independant, parent-child mother goose, early childhood development, child education, infant education, baby, infant, education, classes, programs, baby classes, infant classes, infants, babies, children, calgary public library, library, airdrie, cochrane, toddler, alex, may, 0-24 months, toddlers, newborns, newborn, toddler,">

    <script>
        function cancel(){
            window.location.href = 'cancelregistration.php';
        }
    </script>
        
</head>

<body>

<?php
if(isset($_POST['email'])) {
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "valerie@rhymeandreason.ca";
    $email_subject = "At Home with Mother Goose - Class Request";
     
     
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
     
    $name = $_POST['name']; // required
    $phone = $_POST['phone']; // required
    $email_from = $_POST['email']; // required
    $prevattend = $_POST['prevattend']; // required
    $interests = $_POST['interests']; // required
    $currentclass = $_POST['currentclass']; // required
    $class = $_POST['class']; // not required
    $dow = $_POST['dow']; // not required
    $tod = $_POST['tod']; // not required
    $child = $_POST['child']; // required
   
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Phone: ".clean_string($phone)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Previously Attended a Class?: ".clean_string($prevattend)."\n";
    $email_message .= "Interest in Class?: ".clean_string($interests)."\n";
    $email_message .= "Interest in attending current class?: ".clean_string($currentclass)."\n";
    $email_message .= "Which class?: ".clean_string($class)."\n";
    $email_message .= "Preferred day of the week?: ".clean_string($dow)."\n";
    $email_message .= "Preferred time of day?: ".clean_string($tod)."\n";
    $email_message .= "Age of child/children: ".clean_string($child)."\n";
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);
?>
 
<!-- include your own success html here -->

<!-- Header Banner and Buttons -->      
            <div id="banner" title="Rhyme and Reason"><a href="index.html"><img src="Images/banner alone.jpg"></a></div><div id="buttons"><a href="index.html" onMouseOver='changeBtn(1,"Images/home button small.jpg")' onMouseOut='changeBtn(1,"Images/home button.jpg")'><img src="Images/home button.jpg" class="button" alt="Home"></a><a href="aboutus.html" onMouseOver='changeBtn(2,"Images/about us button small.jpg")' onMouseOut='changeBtn(2,"Images/about us button.jpg")'><img src="Images/about us button.jpg" class="button" alt="About Us"></a><a href="Classes.html" onMouseOver='changeBtn(3,"Images/classes button small.jpg")' onMouseOut='changeBtn(3,"Images/classes button.jpg")'><img src="Images/classes button.jpg" class="button" alt="Classes"></a><a href="Media.html" onMouseOver='changeBtn(4,"Images/media button small.jpg")' onMouseOut='changeBtn(4,"Images/media button.jpg")'><img src="Images/media button.jpg" class="button" alt="Media"></a><a href="ContactUs.html" onMouseOver='changeBtn(5,"Images/contact us button small.jpg")' onMouseOut='changeBtn(5,"Images/contact us button.jpg")'><img src="Images/contact us button.jpg" class="button" alt="Contact Us"></a></div>

    <div id="aboutcontain" style="width:1144px;margin-left:auto;margin-right:auto;margin-top: 20px;">
            <p>Thank you for expressing your interest in Rhyme and Reason!</p>
            <p>We will be in contact with you shortly!</p>
    </div>
    
<!-- Footer Navigation -->
        <div id="divider"><hr /></div>
        <div id="navlinks">
            <p><div id="homediv"><a class="navlink" href="index.html">Home</a></div>|<div id="aboutdiv"><a class="navlink" href="aboutus.html">About Us</a></div>|<div id="classesdiv"><a class="navlink" href="Classes.html">Classes</a></div>|<div id="mediadiv"><a class="navlink" href="Media.html">Media</a></div>|<div id="contactdiv"><a class="navlink" href="ContactUs.html">Contact Us</a></div></p>
            <p>Copyright 2012 &copy; Rhyme and Reason</p>
        </div>



</body>
</html>

<?php
}
?>