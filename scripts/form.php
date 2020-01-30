<?php
  $name=$_REQUEST['name'];
  $email=$_REQUEST['email'];
  $subject=$_REQUEST['service'];
  $message=$_REQUEST['subject'];
  $message= "Email: " . $email . "\r\n" . "\r\n" . $message;
  if (($name=="")||($name=="Enter your name..")||($email=="")||($email=="Enter your email..")||($subject==""))
    {
      echo "All fields are required for the form to be submitted.";
    }
  elseif (strpos($email, '@') !== False)
    {
      mail("thomy.erwan@gmail.com", $subject, $message);
      echo "Email sent!";
    }
  else
    {
      echo "please enter a valid email adress.";
    }
?>
