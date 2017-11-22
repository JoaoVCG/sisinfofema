<?php
    require_once('conectar.php'); 

    $id = trim($_POST['id']); 

    if(!empty($id)){
      $conex = open_database(); 
      selectDb();
      $sql = "DELETE from clientes where id='$id';";
      $ins = mysql_query($sql); 
      close_database($conex); 
      
      if ($ins==FALSE)
         $mensagem = "Erro: não foi possível remover o cliente"; 
      else {
         $mensagem = "Foi removido o seguinte" . mysql_affected_rows() . " cliente <br/>";
         unset($id); 
      }
      echo $mensagem; 
    }
    header("location: listarClientes.php")
?>