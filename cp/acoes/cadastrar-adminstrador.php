<?php

	require_once '../includes/configuration.php';

	$nome  = $_POST["adm-name"];
	$email = $_POST["adm-email"];
	$user  = $_POST["adm-user"];
	$pass  = $_POST["adm-pass"];
	//$crypt = hash("whirpool", $pass);
	$imgP = "default.png";

	mysql_query("INSERT INTO administradores (id, nome, imgPerfil, email, usuario, senha) VALUES (0, '$nome', '$imgP', '$email', '$user', $pass)") or die(mysql_error());//'crypt'

	header("Location: ../administracao-portal.php");
?>