<?php
$to_email = "all@codenomad.net";
$subject = "Mail Function Php";
$msg = "Shi Hai Na!";
$headers = "From:santosh@codenomad.net";

if (mail($to_email, $subject, $msg, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}

?>