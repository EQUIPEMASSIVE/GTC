<?php require 'includes/header.php'; ?>

    <main>
        <!-- BEGIN PAGE CONTAINER-->
        <div class="page-content" xmlns="http://www.w3.org/1999/html">
            <div class="clearfix"></div>
            <div class="content">
                <div class="page-title">
                    <div class="form-inline">
                        <h3>Todas as Notícias</h3></span>
                    </div>
                </div>

                <div id="publicar-noticia-extra">

                    <?php
                    if (! isset ( $_GET ["id_nt_ed"] )) {

                    } else {

                        $id_nt_ed = $_GET ["id_nt_ed"];
                        $SQL_SL = mysql_query ( "SELECT * FROM noticias WHERE id_noticia=$id_nt_ed" );
                        while ( $lh = mysql_fetch_array ( $SQL_SL ) ) {
                            $id_nt = $lh ["id_noticia"];
                            $titulo_ntE = $lh ["titulo"];
                            $conteudo_ntE = $lh ["conteudo"];
                            // A TABELA (DATA) ESTA NOMEADA NO )BANCO) ASSIM --->('datapub') e a nova variavel é 'dataPub'. isso confundi!!
                            $dataPub_ntE = explode("-", $lh ["datapub"]);
                            $autorPub_ntE = $lh ["autorPub"];
                            $tagSear_ntE = $lh ["tags"];
                            $imagem_ntE = $lh ["imagem"];


                            $dataExb = $dataPub_ntE[2]."/".$dataPub_ntE[1]."/".$dataPub_ntE[0];
                        }

                        ?>

                        <!-- INICIO DO CODIGO DUPLICADO  EDITAR NOTICIAS-->

                        <form
                                action="acoes/atualizar-noticia-todas-noticias.php?id_nt_up=<?php echo $id_nt; ?>"
                                method="POST" enctype="multipart/form-data">
                            <div class="col-md-8">

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
                            <div class="col-md-4">
                                <!-- Div Publicar -->

                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <input type="submit" class="btn btn-info" name="publicar" value="Publicar Notícia" />
                                        <input type="submit" class="btn btn-danger-dark pull-right" name="salvar-rascunho" value="Rascunho" />
                                    </div>
                                    <div class="panel-body">
                                        <p>
                                            <strong>Data Publicação:</strong> <?php echo $dataExb; ?></p>
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
                                                id="imagem-carregada" name="imagem-noticia" value="<?php echo $imagem_ntE ?>"/>
                                    </div>
                                </div>

                                <!-- Div Categoria -->
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <label class="control-label" for="success">Categoria da Notícia</label>
                                    </div>
                                    <div class="panel-body">

                                        <select class="btn btn-default dropdown-toggle" name="categoria-noticia" required="required">
                                            <?php

                                            $SQL_C = mysql_query ( "SELECT * FROM categoria" );

                                            while ( $ct = mysql_fetch_array ( $SQL_C ) ) {

                                                ?>
                                                <option selected="selected" value="<?php echo $ct['id_categoria']; ?>"><?php echo $ct['nome_categoria']; ?></option>
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
                    <div class="col-xs-12"><hr id="publicar-noticia-extra"></div>
                </div>

                <div id="todas-as-noticias">
                    <div class="col-md-12 col-vlg-8 m-b-10">
                        <div class="table-responsive">

                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr class="active">
                                    <td>Titulo da Notícia</td>
                                    <td>Autor</td>
                                    <td>Categoria</td>
                                    <td>Tags</td>
                                    <td>Data</td>
                                    <td colspan="2">Editar</td>

                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $SQL_TDN = mysql_query ( "SELECT id_noticia, titulo, datapub, autorPub, tags, nome_categoria FROM noticias INNER JOIN categoria ON(noticias.categoria = categoria.id_categoria) WHERE status=1" ) or die ( mysql_error () );

                                while ( $TND = mysql_fetch_array ( $SQL_TDN ) ) {

                                    ?>
                                    <tr>
                                        <td><?php echo $TND['titulo']; ?></td>
                                        <td><?php echo $TND['autorPub']; ?></td>
                                        <td><?php echo $TND['nome_categoria']; ?></td>
                                        <td><?php echo $TND['tags']; ?></td>
                                        <td><?php

                                            $dataExb = explode ( "-", $TND ['datapub'] );

                                            echo $dataExb [2] . "/" . $dataExb [1] . "/" . $dataExb [0];

                                            ?></td>
                                        <td><a id="todas-noticias-menu" href="todas-noticias.php?id_nt_ed=<?php echo $TND["id_noticia"]; ?>"><i class="fa fa-pencil"></i></a></td>
                                        <td><a class="btn-sm btn-danger-dark" href="acoes/btn-lixeira-todas-noticias.php?idN=<?php echo $TND["id_noticia"]; ?>"><i class="fa fa-trash"></i></a></td>
                                    </tr>
                                <?php } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

                <script>

                    CKEDITOR.replace( 'editor1');
                </script> <!-- Wrapper --> </main>

<?php require 'includes/footer.php'?>