<meta charset="UTF-8">
<?php
session_start();
ob_start();

require_once("crud.class.php");
require_once("config.php");
$bd = new BDClass;

$operacao = $_GET['op'];

if($operacao == 'logoff'){
    session_destroy();
    header("/welcome.php");
}


if($operacao == 'caduser'){
    $nome = $_POST['nome'];
	$login = $_POST['login'];
    $senha = $_POST['senha'];


    $bd->inserir("usuarios","nome, login, senha","'".$nome."','".$login."','".$senha."'");

	echo ("<script> alert('Usuário Cadastrado com sucesso!.');</script>");
	echo ("<script> window.location.href = '/welcome.php';</script>");
}


if($operacao == 'sms'){
    $codigo = $_POST['codigo'];
	$numero = $_POST['numero'];
    $mensagem = $_POST['mensagem'];
	$usuario_id = $_POST['usuario'];

	$destino = "+55".$codigo.$numero;

	//Cria e abre o arquivo para escrita
	$fp = fopen($DESTINO_ARQUIVO, "w+");
	// Escreve "exemplo de escrita" no bloco1.txt
	$escreve = fwrite($fp, "To:".$destino);
	$escreve = fwrite($fp, "\r\n");
	$escreve = fwrite($fp, "\r\n");
	$escreve = fwrite($fp, $mensagem);
	// Fecha e salva o arquivo
	fclose($fp);

    $bd->inserir("mensagens","id_user, texto, destino, arquivo","'".$usuario_id."','".$mensagem."','".$destino."','".$NOME_ARQUIVO."'");

	echo ("<script> alert('Mensagem pronta para o envio, veja no STATUS DO ENVIO se ela ja foi enviada.');</script>");
	echo ("<script> window.location.href = '/menuprincipal.php';</script>");
}
