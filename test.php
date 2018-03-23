<?php
$to = 'gauravkoradiya@gmail.com';
$subject = 'Testing PHP Mail';
$message = 'This mail is sent using the PHP mail function';
$headers = 'From: gauravkoradiya@gmail.com';
$headers .="Reply-To:gauravkoradiya@gmail.com";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type:text/html;charset=ISO-8859-1\r\n";
mail($to,$subject,$message,$headers);

?>
