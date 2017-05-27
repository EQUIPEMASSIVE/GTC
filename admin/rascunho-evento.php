<?php require 'includes/header.php'; ?>

    <main>
        <!-- BEGIN PAGE CONTAINER-->
    <div class="page-content" xmlns="http://www.w3.org/1999/html">
            <div class="clearfix"></div>
            <div class="content">
                <div class="page-title">
                    <div class="form-inline">
                        <h3> Rascunho de Eventos</h3></span>
                    </div>
                </div>

            <!-- 	<div id="submenu"> -->
                    <div id="publicar-noticia">

                    <?php
                    if (! isset ( $_GET ["id_nt_ed"] )) {

                        ?>
                        <form action="acoes/publicar-noticia.php" method="POST"
                              enctype="multipart/form-data">

                            <!-- SIDBAR RIGTH -->
                            <div class="col-md-8 col-vlg-8 m-b-10">

                                <div class="grid-container" id="publicar-noticia-left">
                                    <div class="grid-width-100">
                                        <div class="form-group">
                                        <input class="form-control" type="text" name="titulo-noticia"
                                               placeholder="Coloque o título aqui"/>
                                        </div>
                                        <div class="form-group">
                                            <textarea name="conteudo-noticia" id="editor1"></textarea>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- FIM SIDBAR RIGTH -->

                            <!-- SIDBAR LEFT -->
                            <div class="col-md-4 col-vlg-4 m-b-10">
                                <!-- Div Publicar -->
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <input type="submit" class="btn btn-info" value="Publicar Notícia" />
                                        <input type="submit" class="btn btn-danger-dark pull-right" value="Publicar Notícia" />

                                    </div>
                                    <div class="panel-body">
                                        <p>
                                            <strong>Data Publicação:</strong> <?php echo date("d/m/Y"); ?></p>
                                        <p>
                                            <strong>Autor:</strong> <?php echo $nomeUser; ?></p>
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
                                               class="hidden-xs hidden-sm hidden-md hidden-lg" id="imagem-carregada" name="imagem-noticia" />

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
                        <?php  } ?>
                    <!--fim do segundo form-->
                </div>

<script>
    CKEDITOR.replace( 'editor1');
</script> <!-- Wrapper --> </main>

<?php require 'includes/footer.php'?>