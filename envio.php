<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br"
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img\favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
    <title>SMS - IFPB</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	<style media="screen">
  body {
    background-color: #80b065;
  }

  .menu{
  	font-family: 'Fjalla One', sans-serif;
  	color: #e3e5f0;
    text-align: center;
  }
    </style>
    </head>
    <body>
      <h1 class="menu">Enviar uma mensagem de texto</h1>
      <p>&nbsp;</p>
    	<form method="post" name="formlogin" id="formlogin" action="exec.php?op=sms">
    	  <table width="600" border="0" cellspacing="5" cellpadding="0" align="center">
    	    <tbody>
    	      <tr>
    	        <td class="menu" width="170">Código de área (2 digitos)</td>
    	        <td width="415"><input type="number" name="codigo" id="codigo" size="10" maxlength="2" required>
    	        </td>
              </tr>
    	      <tr>
    	        <td><p class="menu">Número de Destino</p></td>
    	        <td><input type="number" name="numero" id="numero" size="20" maxlength="9" required></td>
              </tr>
    	      <tr>
    	        <td class="menu" valign="top">Mensagem</td>
    	        <td><textarea name="mensagem" id="mensagem" cols="40" rows="10" required></textarea></td>
              </tr>
    	      <tr>
    	        <td><input type="hidden" id="usuario" name="usuario" value="<?php echo ($_SESSION['iduser']);?>"></td>
    	        <td>&nbsp;</td>
              </tr>
    	      <tr>
    	        <td><input class="btn btn-lg btn-primary btn-block" type="submit" value="Enviar"></td>
    	        <td>&nbsp;</td>
              </tr>
              </tbody>
          </table>
    	</form>
      <form action="/menuprincipal.php" method="post">
        <tr>
          <td><input type="submit" class="btn btn-lg btn-primary btn-block" value="Voltar ao Menu"></td>
        </tr>
      </form>
    </body>
