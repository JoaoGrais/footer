<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>

<?php

if(isset ($_POST ['name']) && !empty ($_POST ['email']));

$nome = addslashes($_POST ['name']);
$email = addslashes($_POST ['email']);
$mensagem = addslashes($_POST ['message']);


$to = "contato@programadorbr.com";
$subject =  "Contato - Programador Br";

$body = "Nome: ".$nome. "\r\n".
        "Email: ".$email."\r\n".
        "Mensagem: ".$mensagem;

$header = "From: igor@programadorbr.com"."\r\n".
        "Reply-To:".$email."\r\n".
        "X=Mailer:PHP/".phpversion();

if(mail($to, $subject, $body, $header)){
    
    echo("Email enviado com sucesso!");

}else{
    echo("O Email não pode ser enviado!");
}


?>
    
</body>
</html>
