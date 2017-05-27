<?php
/**
* Created by PhpStorm.
* User: Alvaro
* Date: 26/05/2017
 * Time: 20:17
 */
	require_once '../includes/configuration.php';

	$id_nt = $_GET["id_nt_up"];

	$titulo 	= $_POST["titulo-noticia"];
	$conteudo 	= $_POST["conteudo-noticia"];
	$tagsSear 	= $_POST["tags-pesquisa"];
	$categoria 	= $_POST["categoria-noticia"];

	//configuração da imagem
	$imagem = $_FILES["imagem-noticia"];
	//destino da img a ser upada
	$destino = "../imagens/imgnoticia/".$imagem['name'];
	//CONDICAO: SE O ARQUIVO FOI UMA IMAGEM, SENAO DARÁ ERRO

if (isset($_POST["salvar-rascunho"])) {
    mysql_query("UPDATE noticias SET titulo='$titulo', conteudo='$conteudo', tags='$tagsSear', categoria=$categoria, status=0 WHERE id_noticia=$id_nt");
    mysql_query("UPDATE noticias SET status=0 WHERE id_noticia=$id_nt");
    if($imagem['type'] == "image/jpeg"){

        move_uploaded_file($imagem['tmp_name'] , $destino);
    }
    header ("Location: ../rascunho-noticia.php");
}

///////////////////////////
if (isset($_POST["publicar"])) {

    mysql_query("UPDATE noticias SET titulo='$titulo', conteudo='$conteudo', tags='$tagsSear', categoria=$categoria, imagem='".$imagem['name']."', status=1 WHERE id_noticia=$id_nt");
    mysql_query("UPDATE noticias SET status=1 WHERE id_noticia=$id_nt");

    if($imagem['type'] == "image/jpeg") {

        move_uploaded_file($imagem['tmp_name'] , $destino);

    }
    header ("Location: ../rascunho-noticia.php");
}
?>
