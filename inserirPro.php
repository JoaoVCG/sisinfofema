<?php
    require_once('conectar.php'); 

    $nom  = trim($_POST['txtNom']);
    $fab = trim($_POST['txtFab']); 
    $qtd = trim($_POST['txtQtd']);
    $val = trim($_POST['txtVal']);
    if(!empty($nom) && !empty($fab) && !empty($qtd) && !empty($val)){
      $conex = open_database(); 
      selectDb();   
      $sql = "INSERT INTO produtos (nome, fabricante, quantidade, valor) VALUES  ('$nom', '$fab', '$qtd', '$val');";
      $ins = mysql_query($sql); 
      close_database($conex); 


      if ($ins==FALSE)
         $mensagem = "Consulta inserir produtos deu erro..."; 
      else {
         $mensagem = "Foi inserido os seguintes" . mysql_affected_rows() . " dados <br/>";
         unset($nom, $fab, $qtd, $val); 
      }
      echo $mensagem; 
    }
    header("location: listarProdutos.php")
?>