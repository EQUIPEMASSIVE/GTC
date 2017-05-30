<?php
/**
 * Created by PhpStorm.
 * User: Alvaro
 * Date: 29/05/2017
 * Time: 20:28
 */
require 'includes/header.php';
require_once "includes/configuration.php";
?>

    <main>
        <!-- BEGIN PAGE CONTAINER-->
        <div class="page-content" xmlns="http://www.w3.org/1999/html">
            <div class="clearfix"></div>
               <div class="content">
                   <?php

                   $admin_log = $_SESSION ["usuario"];
                   $admin_pas = $_SESSION ["senha"];

                   $SQL_P = mysql_query ( "SELECT * FROM administradores WHERE usuario='$admin_log' AND senha = '$admin_pas' " );

                   while ( $ln = mysql_fetch_assoc ( $SQL_P ) ) {
                       $id_adm = $ln ['id'];
                       $nm_adm = $ln ['nome'];
                       $em_adm = $ln ['email'];
                       $us_adm = $ln ['usuario'];
                       $im_adm = $ln ['imgPerfil'];
                   }

                    $SQL = mysql_query("SELECT * FROM administradores") or die(mysql_error());
                    while ($lh = mysql_fetch_array($SQL)) {

                        $SQL_COUNT_NT = mysql_query("SELECT * FROM noticias WHERE id_autor='$id_adm'");
                        $SQL_COUNT = mysql_num_rows($SQL_COUNT_NT);
                    }

                   ?>
                    <div class="row">
                        <br />
                        <div class="col-md-8">
                            <div class=" tiles white col-md-12 no-padding">
                                <div class="tiles green cover-pic-wrapper">
                                    <div class="overlayer bottom-right">
                                        <div class="overlayer-wrapper">
                                            <div class="padding-10 hidden-xs">
                                                <button type="button" class="btn btn-primary btn-small"><i class="fa fa-pencil"></i>Editar</button>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="resources/assets/capa.jpg" alt="imagem de capa do usuario" style="width: 100%;">
                                </div>
                                <div class="tiles white">
                                    <div class="row" >
                                        <div class="col-md-3 col-sm-3">
                                            <div class="user-profile-pic">
                                                <img width="69" height="69" data-src-retina="imagens/perfil/<?php echo $im_adm; ?>" data-src="imagens/perfil/<?php echo $im_adm; ?>" src="imagens/perfil/<?php echo $im_adm; ?>" alt="imagem do perfil de usuário">
                                            </div>
                                            <div class="user-mini-description">
                                                <h3 class="text-success semi-bold">
                                                    <?php echo $SQL_COUNT; ?>
                                                </h3>

                                                <h5>Publicaçôes</h5>
                                            </div>
                                        </div>
                                        <div class="col-md-7 user-description-box  col-sm-5">
                                            <h4 class="semi-bold no-margin"><?php echo $nm_adm; ?></h4>
                                            <h6 class="no-margin">CEO do Guia Tecnológico</h6>
                                            <br>
                                            <p><i class="fa fa-envelope"></i><?php echo $em_adm; ?></p>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="col-md-4">
                            <div class="tiles white col-md-12 col-sm-12 no-padding">
                                <div class="tiles-body">
                                    <div class="row">
                                        <form
                                            action="acoes/atualizar-perfil.php?id_adm=<?php echo $id_adm; ?>"
                                            method="POST" enctype="multipart/form-data">
                                            <div class="page-title">
                                                <div class="form-inline">
                                                    <h4> Alterar Informações do Usuário</h4>
                                            </div>
                                            <br />

                                            </div>
                                               <div class="input-group transparent">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
                                                <input type="email" name="adm-email-up" class="form-control" placeholder="email" alt="alterar email do Usuario" value="<?php echo $em_adm; ?>" >
                                            </div>
                                            <br />

                                            <div class="input-group transparent">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-user"></i>
                                                </span>
                                                <input type="text" name="adm-user-up" class="form-control" placeholder="Usuário" alt="alterar Usuario" value="<?php echo $us_adm; ?>" >
                                            </div>
                                            <br />

                                            <div class="input-group transparent">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-key"></i>
                                                </span>
                                                <input type="password" name="adm-pass-up" maxlength="15"
                                                       required="required" class="form-control" placeholder="Senha" alt="alterar Senha de Usuario" value="<?php echo $us_adm; ?>" >
                                            </div>
                                            <kbd class="badge-success">*Informe uma nova senha ao alterar alguma informação do seu usuário </kbd>
                                            <br />
                                            <br />

                                            <div class="input-group transparent">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-picture-o"></i>
                                                </span>
                                                <input type="text" class="form-control" alt="alterar Imagem do Usuario" id="imagem-noticia-carregar" placeholder="Selecione uma imagem" required="required" >

                                            </div>
                                            <input type="file" class="hidden-xs hidden-sm hidden-md hidden-lg" id="imagem-carregada" name="adm-imgPerfil-up" />
                                            <br />

                                            <button type="submit" class="btn btn-primary btn-cons form-control">
                                                <i class=" fa fa-refresh "></i> Atualizar
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</main>

<?php require 'includes/footer.php';?>
