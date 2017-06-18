



<?php 
session_start();

require_once "includes/configuration.php";

                            $id_ct = $_GET ["id_ct"];
                            $titulo_ev = $_POST["titulo-evento"];
                            $cont_ev = $_POST["conteudo-evento"];
                            $status = 1;
                              

                            $autorPub = $_SESSION['usuario'];
							$autorSen = $_SESSION['senha'];

							$id_ct = $_GET ["id_ct"];
							$sql = mysql_query ( "SELECT * FROM eventos INNER JOIN administradores ON (eventos.id_evento = administradores.id) WHERE id_evento=$id_ct AND status='0' ")or die(mysql_error());



							// Exibe as informações de cada usuário
							while ($evento = mysql_fetch_array($sql)) 
							$autorN = $evento['nome'];
							$idAutor = $evento['id'];



                                mysql_query("UPDATE eventos SET autorPub='$autorPub', titulo='$titulo_ev', conteudo='$cont_ev', status='$status' WHERE id_evento=$id_ct ") or die(mysql_error());
                                header("Location: testeUP.php");
                             





              
              
?>