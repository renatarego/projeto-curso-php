<?php
session_start();
header ( 'Content-Type: text/html; charset=UTF-8' );
include '../lib/funcoes.php';
include '../config/conexao.php';

//Prepara para salvar no banco
$melhorHorario = implode(",",$_POST["melhorHorario"]);
$dataCadastro = date("Y-m-d H:i:s");

$sql = "INSERT INTO
		contato (nome, email, sexo, assunto, melhorHorario,
				mensagem, telefone, dataCadastro)

		VALUES  (	'".$_POST["userName"]."',
					'".$_POST["userEmail"]."',
					'".$_POST["sexo"]."',
					'".$_POST["assunto"]."',
					'".$melhorHorario."',
					'".$_POST["userMsg"]."',
					'".$_POST["telefone"]."',
					'".$dataCadastro."'
				);
		";
//Salva no banco
$retorno = mysql_query($sql);


// 1. Prepara a mensagem
$mensagem = "Nome: <br/> " . $_POST ["userName"] . "<br/><br/>" . "E-mail: <br/> " . $_POST ["userEmail"] . "<br/><br/>" . "Mensagem: <br/> " . $_POST ["userMsg"] . "<br/><br/>";

if (count ( $_POST ["melhorHorario"] ) > 0) {
	$mensagem .= "Melhor horário: <br/> ";
	foreach ( $_POST ["melhorHorario"] as $horario ) {
		$mensagem .= $horario . '<br/>';
	}
}
//Prepara
$remetente = array (
		"efranco23@gmail.com",
		"Eder Gato" 
);
//Envia o e-mail
$enviou = enviaEmail ( "efranco@gmail.com", $_POST ["assunto"], $mensagem, $remetente );
if($enviou){
	 $retorno = "Seu e-mail foi enviado com sucesso! :)";
} else {
	$retorno = "Deu zica! Tenta mais tarde.";
}

$_SESSION["feedback"] = $retorno;
//setcookie("feedback",$retorno,time()+3600,"/");

header("location: ../retorno.php?id=".mysql_insert_id());




