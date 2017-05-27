<?php require 'includes/header.php'; ?>

    <main>
        <!-- BEGIN PAGE CONTAINER-->
    <div class="page-content" xmlns="http://www.w3.org/1999/html">
            <div class="clearfix"></div>
            <div class="content">
                <div class="page-title">
                    <div class="form-inline">
                        <h3>Compor Notícia</h3></span>
                    </div>
                </div>


                <div id="publicar-noticia">

                    <?php
                    if (! isset ( $_GET ["id_nt_ed"] )) {

                        ?>
                        <form action="acoes/publicar-noticia.php" method="POST"
                              enctype="multipart/form-data">

                            <!-- SIDBAR RIGTH -->
                            <div class="col-md-8">

                                <div class="grid-container" id="publicar-noticia-left">
                                    <div class="grid-width-100">
                                        <input class="form-control" type="text" name="titulo-noticia"
                                               placeholder="Coloque o título aqui"/>
                                        <br>
                                        <div >
                                            <textarea name="conteudo-noticia" id="editor1"></textarea>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- FIM SIDBAR RIGTH -->

                            <!-- SIDBAR LEFT -->
                            <div class="col-md-4">
                                <!-- Div Publicar -->
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <input type="submit" class="btn btn-info" name="publicar" value="Publicar Notícia" />
                                        <input type="submit" class="btn btn-danger-dark pull-right" name="salvar-rascunho" value="Rascunho" />
                                    </div>
                                    <div class="panel-body">
                                        <p>
                                            <strong>Data Publicação:</strong> <?php echo date("d/m/Y"); ?></p>
                                        <p><strong>Autor:</strong> <?php echo $nomeUser; ?></p>
                                    </div>
                                </div>

                                <!-- Div  Tags-->
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <label class="control-label" for="success">Tags de Pesquisa</label>
                                    </div>
                                    <div class="panel-body">
                                        <p>
                                            <input class="form-control" type="text" name="tags-pesquisa"
                                                   placeholder="Tag de pesquisa" required="required"/>
                                        </p>

                                    </div>
                                </div>

                                <!-- Div Imagem -->
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <label class="control-label" for="success">Imagem da Notícia</label>
                                    </div>
                                    <div class="panel-body">
                                        <input class="form-control" type="text" id="imagem-noticia-carregar"
                                               placeholder="Selecione Imagem" required="required"/> <input type="file"
                                                                                                           class="hidden-xs hidden-sm hidden-md hidden-lg"
                                                                                                           id="imagem-carregada" name="imagem-noticia" />

                                    </div>
                                </div>


                                <!-- Div Categoria -->
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <label class="control-label" for="success">Categoria da Notícia</label>
                                    </div>
                                    <div class="panel-body">

                                        <select  class="btn btn-default dropdown-toggle" name="categoria-noticia" required="required">
                                            <option selected="selected" value="">Selecione uma Categoria</option>
                                            <?php

                                            $SQL_C = mysql_query ( "SELECT * FROM categoria" );

                                            while ( $ct = mysql_fetch_array ( $SQL_C ) ) {

                                                ?>
                                                <option value="<?php echo $ct['id_categoria']; ?>"> <?php echo $ct['nome_categoria']; ?></option>
                                            <?php } ?>

                                        </select>

                                    </div>
                                </div><!--class="panel panel-primary"-->
                            </div>

                            <!-- FIM SIDBAR LEFT -->
                        </form>
                        <!--fim das CHAVES if(!isset($_GET["id_nt_ed"])) -->
                        <?php
                    } else {

                        $id_nt_ed = $_GET ["id_nt_ed"];
                        $SQL_SL = mysql_query ( "SELECT * FROM noticias WHERE id_noticia=$id_nt_ed" );
                        while ( $lh = mysql_fetch_array ( $SQL_SL ) ) {
                            $id_nt = $lh ["id_noticia"];
                            $titulo_ntE = $lh ["titulo"];
                            $conteudo_ntE = $lh ["conteudo"];
                            // A TABELA (DATA) ESTA NOMEADA NO )BANCO) ASSIM --->('datapub') e a nova variavel é 'dataPub'. isso confundi!!
                            $dataPub_ntE = $lh ["datapub"];
                            $autorPub_ntE = $lh ["autorPub"];
                            $tagSear_ntE = $lh ["tags"];
                            $imagem_ntE = $lh ["imagem"];
                        }

                        ?>



                        <!-- INICIO DO CODIGO DUPLICADO  EDITAR NOTICIAS-->

                        <form
                                action="acoes/atualizar-noticia-todas-noticias.php?id_nt_up=<?php echo $id_nt; ?>"
                                method="POST" enctype="multipart/form-data">
                            <div class="col-md-6">

                                <div class="grid-container" id="publicar-noticia-left">
                                    <div class="grid-width-100">
                                        <input class="form-control" type="text" name="titulo-noticia"
                                               placeholder="Coloque o título aqui"
                                               value="<?php echo $titulo_ntE;  ?>"/>
                                        <br>
                                        <div >
                                            <textarea name="conteudo-noticia" id="editor1"><?php echo $conteudo_ntE; ?></textarea>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <!-- FIM SIDBAR RIGTH -->
                            <br>

                            <!-- SIDBAR LEFT -->
                            <div class="col-md-6">
                                <!-- Div Publicar -->
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <input type="submit" class="btn btn-info btn-rigth" value="Publicar Notícia" />
                                        <input type="submit" class="btn btn-warning" name="salvar-rascunho" value="Salvar Notícia"/>
                                    </div>
                                    <div class="panel-body">
                                        <p>
                                            <strong>Data Publicação:</strong> <?php echo $dataPub_ntE; ?></p>
                                        <p>
                                            <strong>Autor:</strong> <?php echo $autorPub_ntE; ?>

                                    </div>
                                </div>

                                <!-- Div  Tags-->
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <label class="control-label" for="success">Tags de Pesquisa</label>
                                    </div>
                                    <div class="panel-body">
                                        <p>
                                            <input class="form-control" type="text" name="tags-pesquisa"
                                                   placeholder="Tag de pesquisa" required="required"
                                                   value="<?php echo $tagSear_ntE; ?>"/>
                                        </p>

                                    </div>
                                </div>

                                <!-- Div Imagem -->
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <label class="control-label" for="success">Imagem da Notícia</label>
                                    </div>
                                    <div class="panel-body">
                                        <input class="form-control" type="text" id="imagem-noticia-carregar"
                                               placeholder="Selecione Imagem" required="required"
                                               value="<?php echo $imagem_ntE ?>"/> <input
                                                type="file" class="hidden-xs hidden-sm hidden-md hidden-lg"
                                                id="imagem-carregada" name="imagem-noticia" />

                                    </div>
                                </div>

                                <!-- Div Categoria -->
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <label class="control-label" for="success">Categoria da Notícia</label>
                                    </div>
                                    <div class="panel-body">

                                        <select class="btn btn-default dropdown-toggle" name="categoria-noticia" required="required">
                                            <option selected="selected" value="">Selecione uma Categoria</option>
                                            <?php

                                            $SQL_C = mysql_query ( "SELECT * FROM categoria" );

                                            while ( $ct = mysql_fetch_array ( $SQL_C ) ) {

                                                ?>
                                                <option value="<?php echo $ct['id_categoria']; ?>"> <?php echo $ct['nome_categoria']; ?></option>
                                            <?php } ?>

                                        </select>

                                    </div>
                                </div>
                            </div>

                            <!-- FIM SIDBAR LEFT -->
                        </form>
                    <?php } ?>
                    <!--fim do segundo form-->
                </div>

<script>
    CKEDITOR.replace( 'editor1');
</script> <!-- Wrapper --> </main>

<?php require 'includes/footer.php'?>