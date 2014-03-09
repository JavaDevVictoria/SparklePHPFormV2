<?php require "config.php";

$name= $_REQUEST['name'] ;
$email = $_REQUEST['email'] ;
$site = $_REQUEST['site'];
$feedback = $_REQUEST['feedback'] ;

$message = "Name: $name \n
Email: $email \n 
Site: $site \n
IP: $ip \n
Browser: $httpagent \n
Feedback: $feedback \n";


if (!isset($_REQUEST['email'])) {
    header( "Location: feedback.php" );
  }
  elseif (empty($email) || empty($feedback)) {

    header( "Expires: Mon, 20 Dec 2004 01:00:00 GMT" );
    header( "Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT" );
    header( "Cache-Control: no-cache, must-revalidate" );
    header( "Pragma: no-cache" );


    ?>

    <html>
    <head><title>Error</title></head>
    <body>
    <h1>Error</h1>
    <p>
    Oops, it appears you forgot to enter either your
    email address or your message. Please press the BACK
    button in your browser and try again.
    </p>
    </body>
    </html>


    <?php
    }
    else {

mail( "$emailadd", "$emailtitle", "$message", 
    "From: $email");
  header( "Location: thankyou.php" );
          }
?>