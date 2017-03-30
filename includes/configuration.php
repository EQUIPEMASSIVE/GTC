<?php 
//PROPRIEDADES DB MYSQL
define("HOST", "localhost");
define("USER",  "root");
define("PASS", "");
define("DBNAME", "u263627493_gtc");
    
@mysql_connect(HOST, USER, PASS) or die ("Erro ao conectar ao banco de dados");
mysql_select_db(DBNAME) or die ("Banco de Dados desconhecido, contacte o administrador");


 ?>