<?php
header('Content-Type: text/html; charset=UTF-8');
// var_dump($_GET);
// var_dump($_POST);

//Incluindo classe
require '../lib/phpMailer/class.phpmailer.php';

$mail = new PHPMailer();

//Define os dados do servidor e tipo de conexao

$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host 	= 'mail.khi.by'; // Endereço do servidor SMTP
$mail->SMTPAuth = true; // Usa autenticaçao SMTP? (opcional)
$mail->Username = 'alunos@khi.by'; // Usuário do servidor SMTP
$mail->Password = 'alunos@php1'; // Senha do servidor SMTP
$mail->Port 	= 26;


$mensagem = 
"Nome: <br/> ".$_POST["userName"]."<br/><br/>".
"E-mail: <br/> ".$_POST["userEmail"]."<br/><br/>".
"Mensagem: <br/> ".$_POST["userMsg"]."<br/><br/>";

$mail->AddAddress("efranco23@gmail.com");//Para quem vai ser enviado
$mail->Subject = $_POST["assunto"];//Assunto
$mail->MsgHTML($mensagem);//Conteúdo
$mail->From = $_POST["userEmail"];//E-mail de quem envia
$mail->FromName = $_POST["userName"];//Nome de quem envia
$enviou = @$mail->Send();//Realiza o envio (retorna true/false)


var_dump($enviou);


