



<?php 

require_once "includes/configuration.php";

                            $id_ct = $_GET ["id_ct"];
                            $titulo_ev = $_POST["titulo-evento"];
                            $cont_ev = $_POST["conteudo-evento"];
                            $status = 1;
                              



                                mysql_query("UPDATE eventos SET titulo='$titulo_ev', conteudo='$cont_ev', status='$status' WHERE id_evento=$id_ct ") or die(mysql_error());
                                header("Location: testeUP.php");
                             ?>