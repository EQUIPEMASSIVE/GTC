<?php 
//PROPRIEDADES DB MYSQL

define("HOST", "mysql427.umbler.com");
define("USER",  "u263627493_root");
define("PASS", "root123456"); 
define("DBNAME", "u263627493_gtc");

// As informações abaixo é para usar em offline/local, quando for subir esse arquivo para nuvem,
// mudar para  essas definições acima: 

//define("HOST", "localhost");
//define("USER",  "root");
//define("PASS", "");
//define("DBNAME", "u263627493_gtc");
    
@mysql_connect(HOST, USER, PASS) or die ("Erro ao conectar ao banco de dados");
mysql_select_db(DBNAME) or die ("Banco de Dados desconhecido, contacte o administrador");


 ?>
