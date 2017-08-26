<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="css/style2.css">
</head>
<body>
  <div class="login-page">
  <div class="form">
    <form method="post" name="formlogin" id="formlogin" action="/exec.php?op=caduser">
      <input type="text" name="nome" id="nome" placeholder="name" required autocomplete="off"/>
      <input type="text" name="login" id="login" placeholder="username" required autocomplete="off"/>
      <input type="password" name="senha" id="senha" placeholder="password" required autocomplete="off"/>
      <button>Register</button>
    </form>
  </div>
  </div>
</body>
</html>
