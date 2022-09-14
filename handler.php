<?php
// if(!isset($_POST['submit']))
// {
	// //This page should not be accessed directly. Need to submit the form.
	// echo "error; you need to submit the form!";
// }
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['number'];
$message = $_POST['message'];

//Validate first
if(empty($name)||empty($email)) 
{
    echo "Name and email are required!";
    exit;
}

// if(IsInjected($message))
// {
    // echo "Please try again!";
    // exit;
// }

$email_from = 'info@neweracoaching.ie';//<== update the email address
$email_subject = "Message from - New Era Coaching Website!";
$email_body = "You have received a new message from the $name.\n".
    "\nHere is the message:\n$message\n"."\nHere is the email address:\n$email"."\nHere is the phone number:\n$phone";
    
$to = "info@neweracoaching.ie";//<== update the email address
$headers = "From: <$email_from> \r\n";
$headers .= "Reply-To: <$email> \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers, '-f <$email>');
//done. redirect to thank-you page.
header('Location:form-submission.html');


// Function to validate against any email injection attempts
// function IsInjected($str)
// {
  // $injections = array('(\n+)',
              // '(\r+)',
              // '(\t+)',
              // '(%0A+)',
              // '(%0D+)',
              // '(%08+)',
              // '(%09+)'
              // );
  // $inject = join('|', $injections);
  // $inject = "/$inject/i";
  // if(preg_match($inject,$str))
    // {
    // return true;
  // }
  // else
    // {
    // return false;
  // }
// }
 ini_set('display_errors', 1);  
?> 