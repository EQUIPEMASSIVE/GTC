<?php

	session_start();

	require_once '../includes/configuration.php';   

	$titulo 	= $_POST["titulo-noticia"];
	$conteudo 	= $_POST["conteudo-noticia"];
	$dataPub  	= date("Y-m-d");
	$autorPub 	= $_SESSION["usuario"];
	$tagsSear 	= $_POST["tags-pesquisa"];
	$categoria 	= $_POST["categoria-noticia"];

	//Selecioando autor da noticia


	$autorPub = $_SESSION['usuario'];
	$autorSen = $_SESSION['senha'];

	$SQL_AU = mysql_query("SELECT id, nome FROM administradores WHERE usuario='$autorPub' and senha='$autorSen' ") or die(mysql_error());

	while ($ath = mysql_fetch_assoc($SQL_AU)) {
		$autorN = $ath['nome'];
		$idAutor = $ath['id'];
	}

	//configuração da imagem
	$imagem = $_FILES["imagem-noticia"]; 
	//destino da img a ser upada
	$destino = "../imagens/imgnoticia/".$imagem['name'];
	//CONDICAO: SE O ARQUIVO FOI UMA IMAGEM, SENAO DARÁ ERRO
	if (isset($_POST["salvar-rascunho"])) {
		
		mysql_query("INSERT INTO  noticias (id_noticia, titulo, conteudo, dataPub, autorPub, id_autor, tags, categoria, imagem, status) VALUES (0, '$titulo', '$conteudo', '$dataPub', '$autorN', '$idAutor', '$tagsSear', '$categoria', '".$imagem['name']."', 0)")or die(mysql_error());
		
		if($imagem['type'] == "image/jpeg"){

			move_uploaded_file($imagem['tmp_name'] , $destino);

		}

		header ("Location: ../gerenciar-noticia.php");
	}


	if($imagem['type'] == "image/jpeg") {

		mysql_query("INSERT INTO  noticias (id_noticia, titulo, conteudo, dataPub, autorPub, id_autor, tags, categoria, imagem, status) VALUES (0, '$titulo', '$conteudo', '$dataPub', '$autorN' , '$idAutor',  '$tagsSear', '$categoria', '".$imagem['name']."', 1)") or die(mysql_error());

		move_uploaded_file($imagem['tmp_name'] , $destino);

		header ("Location: ../gerenciar-noticia.php");
	}

	

?>