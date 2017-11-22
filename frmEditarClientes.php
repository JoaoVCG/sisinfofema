<?php
    require_once('conectar.php'); 

     $id = trim($_REQUEST['id']); 

     $conex = open_database(); 
     selectDb(); 
     $registros = mysql_query("SELECT * FROM clientes where id=". $id); 
     close_database($conex);

     $row = mysql_fetch_array($registros); 
     $nom = $row['nome']; 
     $cpf = $row['cpf']; 
     $end = $row['endereco'];  
     $tel = $row['telefone'];
?>
<!DOCTYPE html>
<html lang="pt-br">
     <head>
        <meta charset="UTF-8">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/style.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Alterar Clientes</title>
    </head>
    <body background="back.jpg" class="container">
    <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="admin.html">Info Tech</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="admin.html"><span class="glyphicon glyphicon-home"></span> Início</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-edit"></span> Efetuar Cadastro <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="inserirClientes.html"><span class="glyphicon glyphicon-user"></span> Cliente</a></li>
              <li><a href="inserirProdutos.html"><span class="glyphicon glyphicon-tags"></span> Produto</a></li>
              <li><a href="frmInserirPedidos.php"><span class="glyphicon glyphicon-shopping-cart"></span> Pedido</a></li>
            </ul>
          </li>
          <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-folder-open"></span> Exibir <span class="caret"></span></a>
          <ul class="dropdown-menu">
                <li><a href="listarClientes.php"><span class="glyphicon glyphicon-user"></span> Cliente</a></li>
                <li><a href="listarProdutos.php"><span class="glyphicon glyphicon-tags"></span> Produto</a></li>
                <li><a href="listarPedidos.php"><span class="glyphicon glyphicon-shopping-cart"></span> Pedido</a></li>
          </ul>
        </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href='sair.php'><span class="glyphicon glyphicon-log-out"></span> Deslogar</a></li>
        </ul>
      </div>
    </div>
    </nav>
        <hr>
        <form id="frmEditarClientes" name="frmEditarClientes" method="post" action="editarClientes.php">
           <div class="form-group">
              <label for="lblIdt">ID: <?php echo $id?> </label>
              <input type="hidden" name="id" value="<?php echo $id?>"/>
           </div>
           <div class="form-group">
              <label for="lblNom">Nome:</label>
              <input type="text" class="form-control" id="txtNom"
               name="txtNom" value="<?php echo $nom?>" placeholder="Nome do Cliente">
           </div>
           <div class="form-group">
              <label for="lblCPF">CPF:</label>
              <input type="text" class="form-control" id="txtCPF" 
              name="txtCPF" value="<?php echo $cpf?>" placeholder="CPF do Cliente">
           </div>
           <div class="form-group">
              <label for="lblEnd">Endereço:</label>
              <input type="text" class="form-control" name="txtEnd" 
              id="txtEnd" value="<?php echo $end?>" placeholder="Endereço do Cliente">
           </div>
           <div class="form-group">
              <label for="lblTel">Telefone:</label>
              <input type="text" class="form-control" name="txtTel" 
              id="txtTel" value="<?php echo $tel?>" placeholder="Telefone do Cliente">
           </div>         
           <input name="bt_ed" id="bt_ed" class="btn btn-success" type="submit" value="Alterar"> 
           <input name="bt_voltar" id="bt_voltar" class="btn btn-primary" type="button" value="Ver Todos Clientes"
                 onclick="javascript:location.href='listarClientes.php'"> 

        </form>
    </body>   
</html>



