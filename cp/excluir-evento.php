<?php
	require_once 'includes/configuration.php';
	$id_ct = (int)$_GET["id_ct"];

	mysql_query("DELETE FROM eventos WHERE id_evento='$id_ct' ")or die(mysql_error()); //vai excluir um campo por id
	header("Location: testeUP.php");


?>