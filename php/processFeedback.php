<?php
//processFeedback.php

//Construct the message to be sent to the business
$messageToBusiness = 
    "From: ".$_POST['lastName']."\r\n" .
    "E-mail address: ".$_POST['email']."\r\n".
    "Phone number: ".$_POST['phone']."\r\n".
    "Subject: ".$_POST['subject']."\r\n".
    $_POST['message']."\r\n";

//Construct the confirmation message to be e-mailed to the client
$messageToClient =
    "Dear ".$_POST['salute']." ".$_POST['lastName'].":\r\n".
    "The following message was received from you by Nature's Source:\r\n\r\n".
    $messageToBusiness.
    "------------------------\r\nThank you for the feedback and your patronage.\r\n" .
    "The Nature's Source Team\r\n------------------------\r\n";
if ($_POST['mail list'])
    $messageToClient .= "P.S. We will add you to our mail list!";
else
	$messageToClient .= "P.S. We will not add you to our mail list. If you would like to be added, let us know!";
//Send the confirmation message to the client
$headerToClient = "From: webbook@cs.smu.ca\r\n";
mail($_POST['email'], "Re: ".$_POST['subject'], $messageToClient, $headerToClient);

//Transform the confirmation message to the client into XHTML format and display it
$display = str_replace("\r\n", "<br />\r\n", $messageToClient);
$display =
    "<html><head><title>Your Message was recieved! Thank you for your Feedback :D</title></head><body><tt>".
    $display.
    "</tt></body></html>";
echo $display;

//Log the message in a file called feedback.txt on the web server
$fileVar = fopen("../data/feedback.txt", "a")
    or die("Error: Could not open the log file.");
fwrite($fileVar, "\n-------------------------------------------------------\n")
    or die("Error: Could not write to the log file.");
fwrite($fileVar, "Date received: ".date("jS \of F, Y \a\\t H:i:s\n"))
    or die("Error: Could not write to the log file.");
fwrite($fileVar, $messageToBusiness)
    or die("Error: Could not write to the log file.");
?>

