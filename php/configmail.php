<?php
use Vtiful\Kernel\Format;
require("PHPMailer-master/src/PHPMailer.php");
require("PHPMailer-master/src/SMTP.php");
require("PHPMailer-master/src/Exception.php");


$mail = new PHPMailer\PHPMailer\PHPMailer();



$mail->setFrom('contatoew@ewdev.com.br', 'EW');
$mail->addAddress($email, 'Obrigado');
$mail->Subject = 'Agradecimentos EW';
$mail->Body = 'Olá,

Gostaríamos de agradecer pelo interesse em testar nosso serviço. Esperamos que tenha tido uma boa experiência e que tenha encontrado todas as funcionalidades que precisava. Qualquer dúvida ou feedback, não hesite em nos contatar.

Atenciosamente,
EW';


$mail->isSMTP();
$mail->Host = 'smtp.titan.email';
$mail->SMTPAuth = true;
$mail->Username = 'contatoew@ewdev.com.br';
$mail->Password = 'edB!xBBuG3axmc4';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail2 = new PHPMailer\PHPMailer\PHPMailer();

$mail2->setFrom('contatoew@ewdev.com.br', 'EW');
$mail2->addAddress('eliasvagner.456@gmail.com', 'usuario');
$mail2->Subject = 'teste mail titian';
$mail2->Body = $email;


$mail2->isSMTP();
$mail2->Host = 'smtp.titan.email';
$mail2->SMTPAuth = true;
$mail2->Username = 'contatoew@ewdev.com.br';
$mail2->Password = 'edB!xBBuG3axmc4';
$mail2->SMTPSecure = 'tls';
$mail2->Port = 587;

?>