<?php
$to = "sansbuster@gmail.com";
$subject = "HTML email";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
<tr>
<td>John</td>
<td>Doe</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <ikhsan15nur@gmail.com>' . "\r\n";
// $headers .= 'Cc: sansgamers15@gmail.com' . "\r\n";

$our_server = 'smtp.gmail.com';
ini_set('SMTP', $our_server );

mail($to,$subject,$message,$headers);
?>