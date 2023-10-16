<?php
$name = $_post['name'];
$visitor_email = $_POST['email'];
$problem = $_POST['problem'];
$message = $_POST['messsage'];

$email_from = 'info@yourwebsite.com';

$email_problem = 'New Form Submission';

$email_body = "User Name; $name.\n".
                "User Email; $visitor_email.\n".
                "problem; $problem.\n".
                "User Message; $message.\n";

$to =  'eshi.akawat@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply=To: $visitor_email \r\n";


mail($to, $email_problem,$email_body,$headers);

header("Location: vs code.html");


?>