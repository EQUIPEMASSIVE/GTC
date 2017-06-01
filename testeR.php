<?php


  require_once 'includes/configuration.php';   

  $titulo   = $_POST["titulo-postagem"];
  $conteudo   = $_POST["descricao-nota"];
  $data   = date("Y-m-d");//serve para gravar a data no banco
  




  mysql_query("INSERT INTO  eventos (id_evento, titulo, conteudo, dataPub, status) VALUES (0,'$titulo', '$conteudo', '$data', 0)")or die(mysql_error()); //vai cadastrar um novo evento

  header("Location: teste.php"); 
?>