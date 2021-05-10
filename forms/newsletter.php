<?php

## CONFIG ##

# LIST EMAIL ADDRESS
$recipient = "info@materiium.com";

# SUBJECT (Subscribe/Remove)
$subject = "Materiium Email Sign Up";

# RESULT PAGE
$location = "../email-success.html";

## FORM VALUES ##

# SENDER - WE ALSO USE THE RECIPIENT AS SENDER IN THIS SAMPLE
# DON'T INCLUDE UNFILTERED USER INPUT IN THE MAIL HEADER!
$sender = $recipient;

# MAIL BODY
$body .= "Email: ".$_REQUEST['Email']." \n";
# add more fields here if required

## SEND MESSAGE ##

mail( $recipient, $subject, $body, "From: $sender" ) or die ("Mail could not be sent.");

## SHOW RESULT PAGE ##

header( "Location: $location" );
?>
