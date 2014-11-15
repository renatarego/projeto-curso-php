<?php
require '../lib/phpMailer/class.phpmailer.php';

function enviaEmail($destinatario, $assunto, $mensagem, $remetente) {
	$mail = new PHPMailer ();
	
	// Define os dados do servidor e tipo de conexao
	$mail->IsSMTP (); // Define que a mensagem será SMTP
	$mail->Host = 'mail.khi.by'; // Endereço do servidor SMTP
	$mail->SMTPAuth = true; // Usa autenticaçao SMTP? (opcional)
	$mail->Username = 'alunos@khi.by'; // Usuário do servidor SMTP
	$mail->Password = 'alunos@php1'; // Senha do servidor SMTP
	$mail->Port = 26;
	
	// Trata o tipo de destinatário recebido
	if (is_string ( $destinatario )) {
		$mail->AddAddress ( $destinatario );
	} else if (is_array ( $destinatario )) {
		foreach ( $destinatario as $galera ) {
			$mail->AddAddress ( $galera );
		}
	}
	// Envia CC
	//$mail->AddCC ( "marcio.palheta@gmail.com" );
	// Envia BCC
	//$mail->AddBCC ( "eder.franco@outlook.com" );
	
	
	$mail->Subject = $assunto; // Assunto
	$mail->MsgHTML ( $mensagem ); // Conteúdo
	$mail->From = $remetente[0]; // E-mail de quem envia
	$mail->FromName = $remetente[1]; // Nome de quem envia
	$mail->CharSet = 'UTF-8';
	$enviou = @$mail->Send(); // Realiza o envio (retorna true/false)
	
	//var_dump($assunto);
	//var_dump($mensagem);
	
	return $enviou;
}