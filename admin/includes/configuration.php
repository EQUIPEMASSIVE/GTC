<?php
//PROPRIEDADES DB MYSQL

define("HOST", "mysql796.umbler.com");
define("USER",  "u263627493_root");
define("PASS", "root123456");
define("DBNAME", "u263627493_gtc");
/*
// As informações abaixo é para usar em offline/local, quando for subir esse arquivo para nuvem,
// mudar para  essas definições acima:
define("HOST", "localhost");
define("USER",  "root");
define("PASS", "");
define("DBNAME", "u263627493_gtc");
*/
@mysql_connect(HOST, USER, PASS) or die ("Erro ao conectar ao banco de dados");
mysql_select_db(DBNAME) or die ("Banco de Dados desconhecido, contacte o administrador");


//CODIGO MYSQLI PARA RODAR AS PAGINACOES DO CP INICIAL.PHP

$hostname_conexao = "mysql796.umbler.com";
$database_conexao = "u263627493_gtc";
$username_conexao = "u263627493_root";
$password_conexao = "root123456";

//Offline paginação
/*$hostname_conexao = "localhost";
$database_conexao = "u263627493_gtc";
$username_conexao = "root";
$password_conexao = "";
*/
$mysqli = new mysqli($hostname_conexao, $username_conexao, $password_conexao, $database_conexao);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}


?>
