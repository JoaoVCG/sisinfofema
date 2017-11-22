<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Entrar</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/signin.css" rel="stylesheet">
    <script src="bootstrap/js/ie-emulation-modes-warning.js"></script>

  </head>

  <body>
    <div class="container">		
      <form class="form-signin" method="POST" action="admin.html">
        <h2 class="form-signin-heading text-center"><img src="login.png"/> </h2>
        <label for="inputEmail" class="sr-only">Usuário: </label>
		
        <input type="text" name="usuario" class="form-control" placeholder="Nome de usuário" required autofocus><br />
		
        <label for="inputPassword" class="sr-only">Senha: </label>
        <input type="password" name="senha" class="form-control" placeholder="Senha" required >
        
        <center><button class="btn btn-success btn-md" type="submit">Entrar</button></center>
      </form>
		
    </div>
    <script src="bootstrap/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>