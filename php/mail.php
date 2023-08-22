<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email = $_POST['mail'];

} else {
  $email = null;
  $mailfake = "ouvi um erro com o envio";
}
require('configmail.php');
?>

<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../../css/reset.css">
  <link rel="stylesheet" href="../css/phpstyle.css">

  <title>Espero que goste das ofertas</title>
</head>
<div id="mail">
  <p>
    <?php if (!$mail->send()||!$mail2->send() ) {
      echo 'Erro ao enviar o e-mail de teste: ';
    } else {
      echo 'E-mail de teste enviado com sucesso!';
    } ?>
  </p>
</div>

<body>

</body>