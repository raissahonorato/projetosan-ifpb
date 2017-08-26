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
      .bemvindo{
        font-family: 'Fjalla One', sans-serif;
        color: #66b562;
        font-size:
      }
      .titulo{
        font-family: 'Fjalla One', sans-serif;
      }
    div img {
    display: inline-block;
    width: 9%;
    height: 9%;
    margin-left: 10px;
  }
    </style>
    </head>
    <body>
        <div class="jumbotron text-center">
        <div class="img">
          <img  src="img/IF.png">
          <img  src="img/sms1.png">
        </div>
        <h2 class="bemvindo">Bem vindo ao</h2>
        <h1 class="titulo">Sistema de Alerta e Notificacoes - IFPB</h1>
        <p class="titulo">Seu login e senha serao necessarios.</p>
      </div>
      <form class="form-signin" name="loginform" method="post" action="/login.php">
        <div>
          <button class="btn btn-lg btn-primary btn-block" type="submit" >Login</button>
        </div>
      </form>
      <form class="form-signin" name="loginform" method="post" action="/register.php">
        <div>
          <button class="btn btn-lg btn-primary btn-block" type="submit" action="/register.php">Register</button>
        </div>
      </form>
    </body>
