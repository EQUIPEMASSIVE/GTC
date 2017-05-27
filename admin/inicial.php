<?php require 'includes/header.php'?>
        <!-- BEGIN PAGE CONTAINER-->
        <div class="page-content">
            <div class="clearfix"></div>
            <div class="content">
                <div class="page-title">
                    <div class="form-inline">
                        <span><h3> Página Inicial</h3></span>
                    </div>
                </div>
                <div class="content-wrapper">

                    <div class="container">
                        <div class="row">

                            <div class="col-md-4 col-vlg-4 m-b-10">
                                 <div class="row">
                                    <div class="Compose-Message">
                                <div class="panel panel-default">
                                    <div class="panel-heading">Publicar Notícia Rápida/Rascunho</div>
                                    <div class="panel-body tiles white">
                                        <form action="acoes/publicar-notaR.php" method="POST">
                                            <label>Titulo da Postagem: </label> <input type="text"
                                                                                       class="form-control" name="titulo-postagem" required /> <label>Tags
                                                de Pesquisa: </label> <input type="text" class="form-control"
                                                                             name="tags-pesquisa" /> <label>Descrição da Notícia : </label>
                                            <textarea rows="9" class="form-control" name="descricao-nota"></textarea>
                                            <input class="btn btn-success" type="submit"
                                                   name="publicar-nota" value="Publicar Nota" style="margin-top: 8px;"/>
                                        </form>
                                    </div>
                                    <div class="panel-footer text-muted">
                                        <strong>Note : </strong>Todas as postagem aqui feitas iram para
                                        rascunhos!
                                    </div>
                                </div>
                            </div>
                                 </div> <!-- fim row-->
                            </div>	<!--Fim col-->

                            <!--NOVO CODIGO===============================================================================================================-->
                            <!--NOVO CODIGO CELULAR-->
                            <?php
                            $itens_por_pagina = 6;

                            // pegar a pagina atual
                            @$pagina = intval($_GET['pagina']);
                            // puxar produtos do banco
                            $sql_code = "SELECT titulo, datapub, status FROM noticias WHERE status='1' LIMIT $pagina, $itens_por_pagina";
                            $execute = $mysqli->query($sql_code) or die($mysqli->error);
                            $produto = $execute->fetch_assoc();
                            $num = $execute->num_rows;

                            // pega a quantidade total de objetos no banco de dados
                            $num_total = $mysqli->query("SELECT titulo, datapub, status FROM noticias WHERE status='1'")->num_rows;

                            // definir numero de páginas
                            $num_paginas = ceil($num_total/$itens_por_pagina);
                            ?>
                            <div style="margin-top: 40px;" class="col-md-8 col-vlg-8 m-b-10 no-padding hidden-lg hidden-md hidden-xlg">
                                <div class="row">
                                    <div class="col-md-10">
                                        <span><h4 style="margin-top: -32px;">Últimas Notícias Postadas</h4></span>
                                        <table  class="table table-striped table-bordered table-hover tiles white">
                                            <?php if($num > 0){ ?>

                                            <thead>
                                            <tr>
                                                <td><h4><b>Titulo</b></h4></td  >
                                                <td><h4><b>Data</b></h4></td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php do{ ?>
                                                <tr>
                                                    <td><?php echo $produto['titulo']; ?></td>
                                                    <td><?php echo $produto['datapub']; ?></td>
                                                </tr>
                                            <?php } while($produto = $execute->fetch_assoc()); ?>
                                            </tbody>
                                        </table>

                                        <nav>
                                            <ul class="pagination">
                                                <li>
                                                    <a href="inicial.php?pagina=0" aria-label="Previous">
                                                        <span aria-hidden="true">&laquo;</span>
                                                    </a>
                                                </li>
                                                <?php
                                                for($i=0;$i<$num_paginas;$i++){
                                                    $estilo = "";
                                                    if($pagina == $i)
                                                        $estilo = "class=\"active\"";
                                                    ?>
                                                    <li <?php echo $estilo; ?> ><a href="inicial.php?pagina=<?php echo $i; ?>"><?php echo $i+1; ?></a></li>
                                                <?php } ?>
                                                <li>
                                                    <a href="inicial.php?pagina=<?php echo $num_paginas-1; ?>" aria-label="Next">
                                                        <span aria-hidden="true">&raquo;</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                        <?php } ?>
                                        </table>


                                    </div>
                                </div> <!--fim row-->
                            </div> <!-- fim col-md8 -->
                            <!--NOVO CODIGO COMPUTADOR-->
                            <?php
                            $itens_por_pagina = 6;

                            // pegar a pagina atual
                            @$pagina = intval($_GET['pagina']);
                            // puxar produtos do banco
                            $sql_code = "SELECT titulo, datapub, status FROM noticias WHERE status='1' LIMIT $pagina, $itens_por_pagina";
                            $execute = $mysqli->query($sql_code) or die($mysqli->error);
                            $produto = $execute->fetch_assoc();
                            $num = $execute->num_rows;

                            // pega a quantidade total de objetos no banco de dados
                            $num_total = $mysqli->query("SELECT titulo, datapub, status FROM noticias WHERE status='1'")->num_rows;

                            // definir numero de páginas
                            $num_paginas = ceil($num_total/$itens_por_pagina);
                            ?>
                            <div class="col-md-8 col-vlg-8 m-b-10 hidden-sm hidden-phone hidden-xs">
                              <div class="row">
                                <div class="col-md-10">
                                    <span><h4 style="margin-top: -32px;">Últimas Notícias Postadas</h4></span>
                                <table  class="table table-striped table-bordered table-hover tiles white">
                                    <?php if($num > 0){ ?>

                                            <thead>
                                            <tr>
                                                <td><h4><b>Titulo</b></h4></td  >
                                                <td><h4><b>Data</b></h4></td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php do{ ?>
                                                <tr>
                                                    <td><?php echo $produto['titulo']; ?></td>
                                                    <td><?php echo $produto['datapub']; ?></td>
                                                </tr>
                                            <?php } while($produto = $execute->fetch_assoc()); ?>
                                            </tbody>
                                        </table>

                                        <nav>
                                            <ul class="pagination">
                                                <li>
                                                    <a href="inicial.php?pagina=0" aria-label="Previous">
                                                        <span aria-hidden="true">&laquo;</span>
                                                    </a>
                                                </li>
                                                <?php
                                                for($i=0;$i<$num_paginas;$i++){
                                                    $estilo = "";
                                                    if($pagina == $i)
                                                        $estilo = "class=\"active\"";
                                                    ?>
                                                    <li <?php echo $estilo; ?> ><a href="inicial.php?pagina=<?php echo $i; ?>"><?php echo $i+1; ?></a></li>
                                                <?php } ?>
                                                <li>
                                                    <a href="inicial.php?pagina=<?php echo $num_paginas-1; ?>" aria-label="Next">
                                                        <span aria-hidden="true">&raquo;</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    <?php } ?>
                                </table>


                                </div>
                              </div> <!--fim row-->
                            </div> <!-- fim col-md8 -->
                        </div>

                    </div>
        </div>
        </div>
        <!-- END CONTAINER -->
<?php require 'includes/footer.php'?>
