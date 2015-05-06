<?php
$to = "jtrumanet@gmail.com";
$tocc = "";
$tobcc = "";
//$from = "ivlost@hotmail.com";
//$subject = "ivlost Auto";
//$postedmessage = 'Here goes my test';
$message = stripslashes($postedmessage);

$headers .= "To: ".$to."\r\n";
$headers .= "From: ".$from." <".$email.">\r\n";
$headers .= "Cc: ".$tocc."\r\n";
$headers .= "Bcc: ".$tobcc."\r\n";

mail($to, $subject, $message, $headers);
?>
<HEAD>
<Title>
    Contact Me
</Title>
<LINK Rel='stylesheet' Type='text/css' HREF='../stylesheets/maincss.php'>
</HEAD>
<body>
<BR>
<BR>
<center>
	Message Sent Successfully
</center>
</body>
