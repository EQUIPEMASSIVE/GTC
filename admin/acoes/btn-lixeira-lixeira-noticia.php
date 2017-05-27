<?php
/**
 * Created by PhpStorm.
 * User: Alvaro
 * Date: 26/05/2017
 * Time: 17:27
 */
require_once '../includes/configuration.php';

$idN = (int)$_GET["idN"];

mysql_query("UPDATE noticias SET status=2 WHERE id_noticia=$idN");

header ("Location: ../lixeira-noticias.php");

?>