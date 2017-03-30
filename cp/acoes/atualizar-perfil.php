<?php
	session_start();


	require_once '../includes/configuration.php';


	$id_adm = (isset($_GET["id_adm"])) ? (int)$_GET["id_adm"] : "";
	$em_adm = $_POST["adm-email-up"];
	$us_adm = $_POST["adm-user-up"];
	$pw_adm = $_POST["adm-pass-up"];
	//$sh_adm = $_POST["adm-pass-up"];
	// $shcryp = hash("whiripool", $sh_adm);

	if(!empty($pw_adm)){
		mysql_query("UPDATE administradores SET email='$em_adm', usuario='$us_adm', senha='$pw_adm' WHERE id=$id_adm ") or die(mysql_error());
		$_SESSION["usuario"] = $us_adm;
		$_SESSION["senha"]   = $pw_adm;
		header("Location: ../alterar-perfil.php");

	}else {
		mysql_query("UPDATE administradores SET email='$em_adm', usuario='$us_adm' WHERE id=$id_adm ") or die(mysql_error());
		$_SESSION["usuario"] = $us_adm;
		header("Location: ../alterar-perfil.php");

	}

	if(!empty($us_adm)){
		mysql_query("UPDATE administradores SET email='$em_adm', usuario='$us_adm', senha='$pw_adm' WHERE id=$id_adm ") or die(mysql_error());
		$_SESSION["usuario"] = $us_adm;
		$_SESSION["senha"]   = $pw_adm;
		header("Location: ../alterar-perfil.php");

	}else {
		mysql_query("UPDATE administradores SET email='$em_adm', usuario='$us_adm' WHERE id=$id_adm ") or die(mysql_error());
		$_SESSION["usuario"] = $pw_adm;
		header("Location: ../alterar-perfil.php");

	}

	// Atualizar Imagens

	$im_adm = $_FILES["adm-imgPerfil-up"];

	if(!empty($im_adm['name'])) {

		$imNome = $im_adm['name'];
		$deImg  = "../imagens/perfil/".$imNome;

		$SQL_IM - mysql_query("SELECT imgPerfil FROM administradores WHERE id=$id_adm");

		while($imP = mysql_fetch_array($SQL_IM)) {
			$nmImP = $imP['imgPerfil'];
		}

		$dir = "../imagens/perfil/".$nmImP;

		if(file_exists($dir) && $nmImP != "default.png"){
			unlink($dir);
		}

		move_uploaded_file($im_adm['tmp_name'], $deImg);

		mysql_query("UPDATE administradores SET imgPerfil='$imNome' WHERE id=$id_adm");

		header("Location: ../alterar-perfil.php");

	}

	
?>