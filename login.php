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
      <form class="login-form" action="/menuprincipal.php" method="post">
      <input type="text" placeholder="username" required/>
      <input type="password" placeholder="password" required/>
      <button>login</button>
      <p class="message">Not registered? <a href="/register.php">Create an account</a></p>
    </form>
  </div>
</div>
</body>
</html>
