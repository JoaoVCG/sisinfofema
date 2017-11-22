<?php
    require_once('conectar.php'); 

    $id = trim($_POST['id']); 

    if(!empty($id)){
      $conex = open_database(); 
      selectDb();
      $sql = "DELETE from produtos where id='$id';";
      $ins = mysql_query($sql); 
      close_database($conex); 
      
      if ($ins==FALSE)
         $mensagem = "Erro: não foi possível remover o produto"; 
      else {
         $mensagem = "Foi removido o seguinte" . mysql_affected_rows() . " produto <br/>";
         unset($id); 
      }
      echo $mensagem; 
    }
    header("location: listarProdutos.php")
?>