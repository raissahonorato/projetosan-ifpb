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
    background-color: #76b852;
  }

  .menu{
  	font-family: 'Fjalla One', sans-serif;
  	color: #e3e5f0;
    text-align: center;
  }
    </style>
    </head>
<body>
  <h1 class="menu">Menu Principal</h1>
  <ul id="listaMenuAdm" data-role="listview" data-inset="true">
    <form class="form-signin" name="loginform" method="post" action="/envio.php">
      <div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" >Enviar Mensagem</button>
      </div>
    </form>
  <form class="form-signin" name="loginform" method="post" action="/statussms.php">
    <div>
      <button class="btn btn-lg btn-primary btn-block" type="submit" >Verificar Status do envio</button>
    </div>
  </form>
  <form class="form-signin" name="loginform" method="post" action="/historicosms.php">
    <div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Histórico de Mensagens</button>
    </div>
  </form>
  <form class="form-signin" name="loginform" method="post" action="/welcome.php">
    <div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sair</button>
    </div>
  </form>
  </ul>
</body>
