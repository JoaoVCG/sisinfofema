<?php
    require_once('conectar.php'); 

    $nom  = trim($_POST['txtNom']);
    $cpf = trim($_POST['txtCPF']); 
    $end = trim($_POST['txtEnd']);
    $tel = trim($_POST['txtTel']);
    if(!empty($nom) && !empty($cpf) && !empty($end) && !empty($tel)){
      $conex = open_database(); 
      selectDb();   
      $sql = "INSERT INTO clientes (nome, cpf, endereco, telefone) VALUES  ('$nom', '$cpf', '$end', '$tel');";
      $ins = mysql_query($sql); 
      close_database($conex); 

      if ($ins==FALSE)
         $mensagem = "Consulta inserir clientes deu erro..."; 
      else {
         $mensagem = "Foi inserido os seguintes" . mysql_affected_rows() . " dados <br/>";
         unset($nom, $cpf, $end, $tel); 
      }
      echo $mensagem; 
    }
    header("location: listarClientes.php")
?>