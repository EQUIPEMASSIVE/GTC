<?php
	require_once '../includes/configuration.php';

	$idNX = (int)$_GET["idNX"];

	mysql_query("DELETE FROM noticias WHERE id_noticia=$idNX");

	header ("Location: ../gerenciar-noticia.php");	



?>