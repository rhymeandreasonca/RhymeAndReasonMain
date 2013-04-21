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
    $email_to = "alex@rhymeandreason.ca";
    $email_subject = "Rhyme and Reason Registration";
     
     
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['firstname']) ||
        !isset($_POST['lastname']) ||
        !isset($_POST['middlename']) ||
        !isset($_POST['address']) ||
        !isset($_POST['cellphone']) ||
        !isset($_POST['homephone']) ||
        !isset($_POST['workphone']) ||
        !isset($_POST['email']) ||
        !isset($_POST['city']) ||
        !isset($_POST['province']) ||
        !isset($_POST['postalcode']) ||
        !isset($_POST['childfirstname']) ||
        !isset($_POST['childlastname']) ||
        !isset($_POST['gender']) ||
        !isset($_POST['dob']) ||
        !isset($_POST['dob-m']) ||
        !isset($_POST['dob-y']) ||
        !isset($_POST['allergies']) ||
        !isset($_POST['choice']) ||
        !isset($_POST['emergfirstname']) ||
        !isset($_POST['emerglastname']) ||
        !isset($_POST['emergphone']) ||
        !isset($_POST['emergrelation']) ||
        !isset($_POST['couponcode']) ||
        !isset($_POST['concerns'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
     
    $adult_first_name = $_POST['firstname']; // required
    $adult_middle_name = $_POST['middlename']; // required
    $adult_last_name = $_POST['lastname']; // required
    $adult_address = $_POST['address']; // required
    $adult_cell_phone = $_POST['cellphone']; // required
    $adult_home_phone = $_POST['homephone']; // not required
    $adult_work_phone = $_POST['workphone']; // not required
    $email_from = $_POST['email']; // required
    $adult_city = $_POST['city']; // required
    $adult_province = $_POST['province']; // required
    $adult_postal_code = $_POST['postalcode']; // required
    $child_first_name = $_POST['childfirstname']; // required
    $child_last_name = $_POST['childlastname']; // required
    $child_gender = $_POST['gender']; // required
    $child_day = $_POST['dob']; // required
    $child_month = $_POST['dob-m']; // required
    $child_year = $_POST['dob-y']; // required
    $child_allergies = $_POST['allergies']; // not required
    $class_choice = $_POST['choice']; // required
    $emerg_first_name = $_POST['emergfirstname']; // required
    $emerg_last_name = $_POST['emerglastname']; // required
    $emerg_phone = $_POST['emergphone']; // required
    $emerg_relation = $_POST['emergrelation']; // not required
    $coupon_code = $_POST['couponcode']; // not required
    $concerns = $_POST['concerns']; // not required
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$adult_first_name)) {
    $error_message .= 'The Adult First Name you entered does not appear to be valid.<br />';
  }
  if(!preg_match($string_exp,$adult_last_name)) {
    $error_message .= 'The Adult Last Name you entered does not appear to be valid.<br />';
  }
  //  if($coupon_code != 'B00K5' || $coupon_code != 'b') {
  //        $error_message .= 'The Coupon Code you have entered does not appear to be valid. Coupon Codes are case-sensitive.<br />';
  // }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "Adult First Name: ".clean_string($adult_first_name)."\n";
    $email_message .= "Adult Middle Name: ".clean_string($adult_middle_name)."\n";
    $email_message .= "Adult Last Name: ".clean_string($adult_last_name)."\n";
    $email_message .= "Adult Address: ".clean_string($adult_address)."\n";
    $email_message .= "Adult Cell Phone: ".clean_string($adult_cell_phone)."\n";
    $email_message .= "Adult Home Phone: ".clean_string($adult_home_phone)."\n";
    $email_message .= "Adult Work Phone: ".clean_string($adult_work_phone)."\n";
    $email_message .= "Adult Email: ".clean_string($email_from)."\n";
    $email_message .= "Adult City: ".clean_string($adult_city)."\n";
    $email_message .= "Adult Province: ".clean_string($adult_province)."\n";
    $email_message .= "Adult Postal Code: ".clean_string($adult_postal_code)."\n";
    $email_message .= "Child First Name: ".clean_string($child_first_name)."\n";
    $email_message .= "Child Last Name: ".clean_string($child_last_name)."\n";
    $email_message .= "Child Gender: ".clean_string($child_gender)."\n";
    $email_message .= "Child DOB - day: ".clean_string($child_day)."\n";
    $email_message .= "Child DOB - month: ".clean_string($child_month)."\n";
    $email_message .= "Child DOB - year: ".clean_string($child_year)."\n";
    $email_message .= "Child Allergies: ".clean_string($child_allergies)."\n";
    $email_message .= "Class Choice: ".clean_string($class_choice)."\n";
    $email_message .= "Emergency First Name: ".clean_string($emerg_first_name)."\n";
    $email_message .= "Emergency Last Name: ".clean_string($emerg_last_name)."\n";
    $email_message .= "Emergency Phone: ".clean_string($emerg_phone)."\n";
    $email_message .= "Emergency Relation: ".clean_string($emerg_relation)."\n";
    $email_message .= "Concerns: ".clean_string($concerns)."\n";
    $email_message .= "Date Terms Agreed: ".clean_string(date('l jS \of F Y h:i:s A'));
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

    $class;
    $classlink;
    $coupon = false;
    $couponaccept = 'Your coupon code has been accepted!';

    switch ($class_choice) {
        case 'tuesday100':
            $class = 'Tuesdays at 1:00pm - 2:00pm, from Apr. 23rd - May 28th';
            $classlink = 'ST3EPSCJR6458';
            if($coupon_code=='B00K5'){
                $classlink = '7FVK8NRG2BHMC';
                $coupon = true;
            }
            elseif($coupon_code && $coupon_code != 'B00K5'){
                $coupon = true;
                $couponaccept = 'Sorry! That coupon code is not valid for this class.';
            }
            break;
        case 'tuesday230':
            $class = 'Tuesdays at 2:30pm - 3:30pm, from Apr. 23rd - May 28th';
            $classlink = '2A3QTCNDAGY4G';
            break;
        case 'athometues':
            $class = 'At Home with Mother Goose, Tuesdays at 9:30am - 10:30am, from Apr. 16th - June 25th';
            $classlink = '5LM8KX9WF7L98';
            break;
        case 'athomefri':
            $class = 'At Home with Mother Goose, Fridays at 10:30am - 11:30am, from Apr. 5th - June 14th';
            $classlink = '5LM8KX9WF7L98';
            break;
        default:
            $class = 'Error';
            $classlink = '';
            break;
      }  
?>
 
<!-- include your own success html here -->

<!-- Header Banner and Buttons -->      
            <div id="banner" title="Rhyme and Reason"><a href="index.html"><img src="Images/banner alone.jpg"></a></div><div id="buttons"><a href="index.html" onMouseOver='changeBtn(1,"Images/home button small.jpg")' onMouseOut='changeBtn(1,"Images/home button.jpg")'><img src="Images/home button.jpg" class="button" alt="Home"></a><a href="aboutus.html" onMouseOver='changeBtn(2,"Images/about us button small.jpg")' onMouseOut='changeBtn(2,"Images/about us button.jpg")'><img src="Images/about us button.jpg" class="button" alt="About Us"></a><a href="Classes.html" onMouseOver='changeBtn(3,"Images/classes button small.jpg")' onMouseOut='changeBtn(3,"Images/classes button.jpg")'><img src="Images/classes button.jpg" class="button" alt="Classes"></a><a href="Media.html" onMouseOver='changeBtn(4,"Images/media button small.jpg")' onMouseOut='changeBtn(4,"Images/media button.jpg")'><img src="Images/media button.jpg" class="button" alt="Media"></a><a href="ContactUs.html" onMouseOver='changeBtn(5,"Images/contact us button small.jpg")' onMouseOut='changeBtn(5,"Images/contact us button.jpg")'><img src="Images/contact us button.jpg" class="button" alt="Contact Us"></a></div>

    <div id="aboutcontain" style="width:1144px;margin-left:auto;margin-right:auto;margin-top: 20px;">
            <p>Thank you for registering in Rhyme and Reason!</p>
            <p><?php echo($class);?></p>
            <p><?php if($coupon){echo($couponaccept);$coupon=false;}?></p>
            <p>We use Paypal in order to provide the most secure payment options. Payment is required in advance, please click the button below to complete enrollment.</p>
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="<?php echo($classlink);?>">
            <input type="button" value="Proceed to Paypal" alt="PayPal - The safer, easier way to pay online!" onclick="submit()" />
            <input type="button" value="Cancel" onclick='cancel()'>
            </form>
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