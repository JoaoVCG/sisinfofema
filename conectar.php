<?php
function open_database() {
  $conectar = mysql_connect("localhost", "root", ""); 
  if (!$conectar){
      echo "Erro: Não foi possível conectar ao banco de dados";
      exit;
  }
  return $conectar; 
}

function close_database($conectar) {
    if (!$conectar) {
        echo "Erro: Não foi possível fechar o banco de dados"; 
    }
     mysql_close($conectar);
}

function selectDb(){
  $dados = mysql_select_db("sisinfo"); 
  if (!$dados){
      echo "Erro: Não foi possível conectar ao banco de dados sisinfo"; 
      exit; 
  }
}
?>