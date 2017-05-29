<?php require 'includes/header.php'?>
        <!-- BEGIN PAGE CONTAINER-->
        <div class="page-content">
            <div class="clearfix"></div>
            <div class="content">
          
                <div class="content-wrapper">
                   <div class="container">
                        <div class="page-title">
                            <div class="form-inline">
                                <h3> Gerêciar Categorias</h3>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 col-vlg-4 m-b-10 no-padding">
                                <!--    Striped Rows Table  -->
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h4>Cadastrar nova categoria</h4></div>
                                    <div class="panel-body tiles white">
                                        <div class="table-responsive">

                                            <form action="acoes/cadastrar-categoria.php" method="POST" onsubmit="return validarFormCat();">

                                                <h5>Informe o nome da(s) categorias(s) abaixo</h5>

                                                <input type="text" name="categorias-nomes" id="categorias-nomes" required />
                                                <input style="width: 28%;" type="submit" class="btn btn-success" value="Cadastrar" />
                                                <p><kbd>Sempre com virgula (,) o nome das categorias.</kbd></p>

                                            </form>

                                        </div>
                                    </div>
                                </div>
                                <!--  End  Striped Rows Table  -->
                            </div>


                    <div class="col-md-8 col-vlg-8 m-b-10">
                        <div class="row">
                            <div class="col-md-10">
                                <!--    Striped Rows Table  -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4>Categorias Cadastradas</h4>
                                    </div>
                                    <div class="panel-body no-padding">
                                        <div class="table-responsive ">
                                            <table class="table table-striped table-bordered table-hover">
                                                <thead>
                                                <tr class="active">
                                                    <th>Nome da Categoria</th>
                                                    <th>Nº de Categorias</th>
                                                    <th>Excluir</th>
                                                </tr>
                                                </thead>
                                                <tbody class="tiles white">
                                                <?php
                                                $SQL_CT = mysql_query("SELECT * FROM categoria");
                                                while ($CTN = mysql_fetch_array($SQL_CT)) {
                                                    $id_ct = $CTN['id_categoria'];
                                                    $SQL_COUNT_NT = mysql_query("SELECT * FROM noticias WHERE categoria='$id_ct' ");
                                                    $COUNT_NUM = mysql_num_rows($SQL_COUNT_NT);

                                                    ?>
                                                    <tr>
                                                        <td><?php echo $CTN['nome_categoria']; ?></td>
                                                        <td><?php echo $COUNT_NUM; ?></td>
                                                        <td><a class="btn btn-danger" href="acoes/excluir-categoria.php?id_ct=<?php echo $id_ct; ?>"><i class="fa fa-trash"></i></a></td>
                                                    </tr>
                                                <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!--  End  Striped Rows Table  -->
                            </div>
                            </div>
                            </div>
                        </div> <!--FIM ROW-->
                    </div> <!--FIM CONTAINER-->
                </div> <!--content-wrapper-->



<?php require 'includes/footer.php'?>

