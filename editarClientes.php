<?php
    require_once('conectar.php'); 

    $id = trim($_POST['id']); 
    $nom  = trim($_POST['txtNom']);
    $cpf = trim($_POST['txtCPF']); 
    $end = trim($_POST['txtEnd']);
    $tel = trim($_POST['txtTel']);

    if(!empty($nom) && !empty($cpf) && !empty($end) && !empty($tel)){
      $conex=open_database(); 
      selectDb();
      $sql = "UPDATE clientes set nome='$nom',
              cpf='$cpf', endereco='$end', telefone='$tel' 
              where id='$id';";
      $ins = mysql_query($sql); 
      close_database($conex); 
      
      if ($ins==FALSE)
         $mensagem = "Erro: não foi possível atualizar os dados"; 
      else {
         $mensagem = "Foi alterado os seguintes" . mysql_affected_rows() . " dados <br/>";
         unset($id, $nom, $cpf, $endereco, $tel); 
      }
      echo $mensagem; 
    }
    header("location: listarClientes.php")
?>