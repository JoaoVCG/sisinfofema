<?php
    require_once('conectar.php'); 

    $id = trim($_POST['id']); 
    $nom  = trim($_POST['txtNom']);
    $fab = trim($_POST['txtFab']); 
    $qtd = trim($_POST['txtQtd']);
    $val = trim($_POST['txtVal']);

    if(!empty($nom) && !empty($fab) && !empty($qtd) && !empty($val)){
      $conex=open_database(); 
      selectDb();
      $sql = "UPDATE produtos set nome='$nom',
              fabricante='$fab', quantidade='$qtd', valor='$val' 
              where id='$id';";
      $ins = mysql_query($sql); 
      close_database($conex); 
      
      if ($ins==FALSE)
         $mensagem = "Erro: não foi possível atualizar os dados"; 
      else {
         $mensagem = "Foi alterado os seguintes" . mysql_affected_rows() . " dados <br/>";
         unset($id, $nom, $fab, $qtd, $val); 
      }
      echo $mensagem; 
    }
    header("location: listarProdutos.php")
?>