<?php
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Cadastrar Cliente</title>
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
        <form id="frmCadPed" name="frmCadPed" method="post" 
              action="insPedido.php" role="form">
          <div class="form-group">
             <label for="lblCliente">Cliente:</label>
             <?php
                      require_once('conectar.php'); 
                      $con = open_database();
                      selectDb();
                      $rsCli = mysql_query("select * from clientes;"); 
                      close_database($con);
             ?>
             <select name="slcCliente" id="slcCliente" class="form-control">
                <?php $row = mysql_fetch_array($rsCli); ?>
                <option value="<?php echo $row['id'] ?>" selected>
                  <?php echo $row['nome'];?> 
                </option>
                <?php while($row = mysql_fetch_array($rsCli)){?>
                  <option value="<?php echo $row['id'] ?>"><?php echo $row['nome'];?> </option>
                <?php }?>
             </select>      
          </div>
        <div class="form-group">
            <label for="lblData">Data: </label>
            <input type="date" class="form-control" name="txtdata" id="txtData"
                   value="<?php (new DateTime())->format('Y-m-d') ?>"
        </div>
        <br>
        <div class="form-group">
             <label for="lblCliente">Produto:</label>
             <?php
                      require_once('conectar.php'); 
                      $con = open_database();
                      selectDb();
                      $rsPro = mysql_query("select * from produtos;"); 
                      close_database($con);
             ?>
             <select name="slcCliente" id="slcCliente" class="form-control">
                <?php $row = mysql_fetch_array($rsPro); ?>
                <option value="<?php echo $row['id'] ?>" selected>
                  <?php echo $row['nome'];?> 
                </option>
                <?php while($row = mysql_fetch_array($rsPro)){?>
                  <option value="<?php echo $row['id'] ?>"><?php echo $row['nome'];?> </option>
                <?php }?>
             </select>      
          </div>
          <div class="form-group">
            <label for="lblQtd">Quantidade: </label>
            <input type="date" class="form-control" name="txtQtd" id="txtQtd"
                   value="">
        </div>
        <div class="form-group">
            <label for="lblVal">Valor: </label>
            <input type="date" class="form-control" name="txtVal" id="txtVal"
                   value="">
        </div>
        <br/>
        <input name="bt_cad" id="bt_cad" class="btn btn-success" type="submit" value="Cadastrar"> 
        <input name="bt_limpar" id="bt_limpar" class="btn btn-danger" type="reset" value="Limpar Campos"> 
        </form>
        
    </body>
</html> 


