<?php
session_start();

	require_once '../includes/configuration.php';   

	$titulo 	= $_POST["titulo-postagem"];
	$conteudo 	= $_POST["descricao-nota"];
	$dataPub  	= date("Y-m-d");
	$tagsSear 	= $_POST["tags-pesquisa"];
	$categoria 	= 4;
	$imagem     = "default.png";

	//Selecioando autor da noticia


	$autorPub = $_SESSION['usuario'];
	$autorSen = $_SESSION['senha'];

	$SQL_AU = mysql_query("SELECT id, nome FROM administradores WHERE usuario='$autorPub' and senha='$autorSen' ") or die(mysql_error());

	while ($ath = mysql_fetch_assoc($SQL_AU)) {
		$autorN = $ath['nome'];
		$idAutor = $ath['id'];
	}

	mysql_query("INSERT INTO  noticias (id_noticia, titulo, conteudo, dataPub, autorPub, id_autor, tags, categoria, imagem, status) VALUES (0, '$titulo', '$conteudo', '$dataPub', '$autorN', '$idAutor', '$tagsSear', $categoria,'$imagem', 0)")or die(mysql_error()); 

	header("Location: ../inicial.php");	
?>