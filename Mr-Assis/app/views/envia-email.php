<?php

$nome = utf8_encode($_POST['nome']);
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

//require 'vendor/phpmailer/PHPMailer.php';
// Importar as classes 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// Carregar o autoloader do composer
require 'vendor/autoload.php';


//require 'vendor/PHPMailer.php';

// if (isset($_POST['assunto']) && !empty($_POST['assunto'])){
//     $assunto = $_POST['assunto'];
// }
// if (isset($_POST['mensagem']) && !empty($_POST['mensagem'])){
//     $mensagem = $_POST['mensagem'];
// }

//configuração servidor
$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Username = 'mrassis.informatica@gmail.com';
$mail->Password = 'assisinformatica';
$mail->Port = 587;

// $mail->From="mrassis.informatica@gmail.com";
// $mail->FromName="Administrador";

//configuraçao remetente
$mail->setFrom($mail->Username,"MrAssis");
$mail->addAddress('mrassis.informatica@gmail.com');
$mail->Subject = $assunto;


$conteudo_email = "
Voce recebeu uma mensagem de $nome $sobrenome ($email):
<br><br>

Mensagem: <br>
$mensagem
";
$mail->isHTML(true);

// $mail->addReplyTo('no-reply@email.com.br');
// $mail->addAddress('email@email.com.br', 'Contato');
//$mail->addCC('mrassis.informatica@gmail.com', 'Cópia');
// $mail->addBCC('email@email.com.br', 'Cópia Oculta');

$mail->Body = $conteudo_email;
//$mail->AltBody = 'Para visualizar essa mensagem acesse http://site.com.br/mail';
//$mail->addAttachment('/tmp/image.jpg', 'nome.jpg');

if(!$mail->send()) {
    echo 'Não foi possível enviar a mensagem.<br>';
    echo 'Erro: ' . $mail->ErrorInfo;
} else{
    
}

