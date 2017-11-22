<?php
      $conectar = mysql_connect("localhost", "root", "");
      if (!$conectar){
           echo "Desculpe! Houve um erro ao conectar no banco de dados.";
           exit;
      }
      $dados = mysql_select_db("sisinfo");
      if (!$dados){
            echo "Desculpe! Não foi possível conectar ao banco de dados sisinfo";
            exit;
      }
      $registros = mysql_query("SELECT * FROM clientes;");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="bootstrap/css/style.css" rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <title>Clientes Cadastrados</title>
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
        <div class="row col-md-7">
        <table  class="table table-striped table table-hover">
            <tr>
                 <th>ID</th>
                 <th>Nome</th>
                 <th>CPF</th>
                 <th>Endereco</th>
                 <th>Telefone</th>  
                 <th></th>
                 <th></th>
            </tr>
            <?php while ($row = mysql_fetch_array($registros)) { ?>
                <tr>
                   <td><?php echo $row['id'] ?></td>
                   <td><?php echo $row['nome'] ?></td>
                   <td><?php echo $row['cpf'] ?></td>
                   <td><?php echo $row['endereco'] ?></td>
                   <td><?php echo $row['telefone'] ?></td>
                   <td>
                      <button type="button" class="btn btn-warning" 
                         onclick="javascript: location.href='frmEditarClientes.php?id=' +
                         <?php echo $row['id'] ?>">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                      </button>
                   </td>
                   <td>
                      <button type="button" class="btn btn-danger" 
                         onclick="javascript: location.href='frmRemoverClientes.php?id=' +
                         <?php echo $row['id'] ?>">
                        <span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>
                      </button>
                   </td>
                </tr>
            <?php } ?>  
        </table>
        <input id="bt_ins" class="btn btn-primary" 
             type="button"  value="Cadastrar Novo Cliente"
                 onclick="javascript:location.href='inserirClientes.html'">
     </div>
                 
</body>
</html>