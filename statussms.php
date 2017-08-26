<?php
session_start();
ob_start();

require("crud.class.php");
require_once("config.php");
$bd = new BDClass;

if(!isset($_SESSION['iduser'])){
	header("/login.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8
	<title>SAN-IFPB</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<h1>Status das mensagens</h1>
	<p><a href="menuprincipal.php">Menu Principal</a></p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
		
	<?php
		$busca = $_SESSION["iduser"];
		$resultado = $bd->busca("mensagens", $busca, "id_user");
		$quantidade = count($resultado);
	
		if($quantidade > 0 ){
			for($i=0; $i < $quantidade; $i++){
				echo ($resultado[$i]['arquivo']);
				echo (" :::: ");
				if (file_exists($PASTA_SAIDA_SMS.$resultado[$i]['arquivo'])) {
					echo "Mensagem ainda não foi enviada";
				}elseif (file_exists($PASTA_SMS_ENVIADA.$resultado[$i]['arquivo'])) {
					echo "Mensagem enviada com sucesso!";
				}elseif (file_exists($PASTA_SMS_ERRO.$resultado[$i]['arquivo'])) {
					echo "Erro mensagem não enviada";
				}
				echo ("<br>");
			}
		}else{
			echo ("<h2>Nenhuma mensagem foi enviada pelo seu usuário</h2>");
		}
	?>

	
</body>
</html>
