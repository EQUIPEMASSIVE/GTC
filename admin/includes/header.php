<!--adicionado a sessao do usuario e mostrando seu nome-->
<?php session_start();

require_once "includes/configuration.php";

require "includes/verificar.php";

@$Usuario = $_SESSION["usuario"];
@$Senha = $_SESSION["senha"];


$SQL = mysql_query("SELECT nome, imgPerfil FROM administradores WHERE usuario= '$Usuario' AND senha= '$Senha' ");

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Guia Tecnologico - Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="" name="description" />
    <meta content="Alvaro" name="author" />
        <?php require "imports-header.php" ?>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-inverse ">
    <!-- BEGIN TOP NAVIGATION BAR -->
    <div class="navbar-inner">
        <div class="header-seperation">
            <ul class="nav pull-left notifcation-center visible-xs visible-sm">
                <li class="dropdown">
                    <a href="#main-menu" data-webarch="toggle-left-side">
                        <i class="material-icons">menu</i>
                    </a>
                </li>
            </ul>
            <!-- BEGIN LOGO -->
            <a href="inicial.php">
                <img src="resources/assets/img/logo.png" class="logo hidden-sm hidden-xs visible-md visible-lg" alt="" data-src="resources/assets/img/logo.png" data-src-retina="resources/assets/img/logo2x.png" width="155" height="27" />
                <img src="resources/assets/img/logo.png" class="logo visible-sm visible-xs hidden-md hidden-lg" alt="" data-src="resources/assets/img/logo.png" data-src-retina="resources/assets/img/logo2x.png" width="120" height="27" style="margin-left: 23%;"/>
            </a>
            <!-- END LOGO -->
            <ul class="nav pull-right notifcation-center" style="margin-top: -15%;" />
                <li class="dropdown visible-xs visible-sm">
                    <a href="logout.php"><i class="material-icons">power_settings_new</i></a>
                </li>

               <!-- PEGA A IMAGEM DO PERFIL -->
                <?php

                while($linha = mysql_fetch_assoc($SQL)){
                    @$nomeUser = $linha['nome'];
                    @$imgpUser = $linha['imgPerfil'];
                }

                ?>
                <li class="dropdown visible-xs visible-sm">
                    <a href="user-profile.html"> <img class="img-circle" src="imagens/perfil/<?php echo @$imgpUser; ?>" alt="Imagem de Perfil" data-src="imagens/perfil/<?php echo @$imgpUser; ?>" data-src-retina="imagens/perfil/<?php echo @$imgpUser; ?>" width="35" height="35" /></a>
                </li>
            </ul>
        </div>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <div class="header-quick-nav">
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="pull-left">
                <ul class="nav quick-section">
                    <li class="quicklinks">
                        <a href="#" class="" id="layout-condensed-toggle">
                            <i class="material-icons">menu</i>
                        </a>
                    </li>
                </ul>
                <ul class="nav quick-section">
                    <li class="quicklinks">
                        <a href="compor-noticia.php" title="Compor Noticia" >
                            <i class="fa fa-pencil-square"></i>&nbsp;
                        </a>
                    </li>

                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
            <!-- BEGIN CHAT TOGGLER -->
            <div class="pull-right">
                <div class="chat-toggler sm">
                    <div class="profile-pic">
                        <a href="alterar-perfil.php"> <img src="imagens/perfil/<?php echo @$imgpUser; ?>" alt="Imagem de Perfil" data-src="imagens/perfil/<?php echo @$imgpUser; ?>" data-src-retina="imagens/perfil/<?php echo @$imgpUser; ?>" width="35" height="35" /></a>
                    </div>
                </div>
                <ul class="nav quick-section ">
                    <li class="quicklinks">
                        <a data-toggle="dropdown" class="dropdown-toggle  pull-right " href="#" id="user-options">
                            <i class="material-icons">tune</i>
                        </a>
                        <ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="user-options">
                            <li>
                                <a href="alterar-perfil.php"><i class="fa fa-user"></i>&nbsp;&nbsp; Minha Conta</a>
                            </li>
                        </ul>
                    </li>
                    <li class="quicklinks"> <span class="h-seperate"></span></li>
                    <li class="quicklinks">
                        <a href="logout.php"><i class="material-icons">power_settings_new</i></a>
                        <ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="user-options">
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- END CHAT TOGGLER --
            <!-- END CHAT TOGGLER -->
        </div>
        <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END TOP NAVIGATION BAR -->
<!-- END HEADER -->
<!-- BEGIN CONTAINER -->
<div class="page-container row-fluid">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar " id="main-menu">
        <!-- BEGIN MINI-PROFILE -->
        <div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper">
            <div class="user-info-wrapper sm">
                <div class="profile-wrapper sm">
                    <img src="imagens/perfil/<?php echo @$imgpUser; ?>" alt="Imagem de Perfil" data-src="imagens/perfil/<?php echo @$imgpUser; ?>" data-src-retina="imagens/perfil/<?php echo @$imgpUser; ?>"  width="69" height="69" />
                    <div class="availability-bubble online"></div>
                </div>
                <div class="user-info sm">
                    <div class="username"><span class="semi-bold"><?php  echo @$nomeUser; ?></span></div>
                    <div class="status">Administrador</div>
                </div>
            </div>
            <!-- END MINI-PROFILE -->
            <!-- BEGIN SIDEBAR MENU -->
            <br />
            <ul>

                <?php
                $SQL_RS = mysql_query("SELECT status FROM noticias WHERE status=0");
                $SQL_TN = mysql_query("SELECT status FROM noticias WHERE status=1");
                $SQL_LX = mysql_query("SELECT status FROM noticias WHERE status=2");

                $CNT_RS = mysql_num_rows($SQL_RS);
                $CNT_TN = mysql_num_rows($SQL_TN);
                $CNT_LX = mysql_num_rows($SQL_LX);

                //IMPLEMENTAÇÃO CONTADOR DE RASCUNHO DE EVENTOS
                // $SQL_EV = mysql_query("SELECT status FROM eventos WHERE status=0");
                // $CNT_EV = mysql_num_rows($SQL_EV);
                //<?php if($CNT_EV != 0): echo "$CNT_EV"; endif;

                ?>
                <li> <a href="inicial.php"><i class="material-icons">home</i> <span class="title">Página Inicil</span> <span class="selected"></span></a>            </li>
                <li id="lista-gerenciar-noticia" class="open active">
                    <a href="javascript:;"> <i class="fa fa-pencil-square-o"></i> <span class="title">Gerênciar Notícia</span> <span class=" arrow"></span> </a>
                    <ul class="sub-menu">
                        <li> <a href="compor-noticia.php"><i class="fa fa-quote-left"></i>Compor Notícia </a> </li>
                        <li> <a href="todas-noticias.php"><i class="fa fa-book"></i>Todas as Notícias <span class="badge badge-info"><?php if($CNT_TN != 0): echo " $CNT_TN"; endif; ?></span></a></li>
                        <li> <a href="rascunho-noticia.php"><i class="fa fa-bookmark-o"></i>Rascunho de Notícias <span class="badge badge-inverse"><?php if($CNT_RS != 0): echo "$CNT_RS"; endif; ?></span></a></li>
                        <li> <a href="rascunho-evento.php"><i class="fa fa-bookmark"></i>Rascunho de Eventos <span class="badge badge-warning"></span></a></li>
                        <li> <a href="lixeira-noticia.php"><i class="fa fa-trash-o"></i>Lixeira <span class="badge badge-danger"><?php if($CNT_LX != 0): echo "$CNT_LX"; endif; ?></span></a></li>
                    </ul>
                </li>
                <li>
                    <a href="gerenciar-categoria.php"> <i class="fa fa-tasks"></i> <span class="title">Gerênciar Categorias</span></a>
                </li>
                <li>
                    <a href="administracao-portal.php"> <i class="fa fa-users"></i> <span class="title">Administração Portal</span></a>
                </li>
                <li>
                    <a href="javascript:;"> <i class="fa fa-gears"></i> <span class="title">Extra</span> <span class=" arrow"></span> </a>
                    <ul class="sub-menu">
                        <li> <a href="#"> Teste </a> </li>
                        <li> <a href="#"> Teste </a> </li>
                        <li> <a href=#"> Teste </a> </li>
                        <li> <a href="#"> Teste</a> </li>
                        <li class=""><a href="#"> Teste</a> </li>
                        <li> <a href="#"> Teste </a> </li>
                        <li> <a href="#"> Teste </a> </li>
                        <li> <a href="#"> Teste </a> </li>
                        <li> <a href="#"> Teste </a> </li>
                        <li> <a href="#"> Teste </a> </li>
                        <li> <a href="#"> Teste </a> </li>
                        <li> <a href="#">Teste</a> </li>
                        <li> <a href="#"> Teste </a> </li>
                    </ul>
                </li>
            </ul>

            <!-- Pagina Mobile-->
            <li class="hidden-lg hidden-md hidden-xs" id="more-widgets">
                <a href="javascript:;"> <i class="material-icons"></i></a>
                <ul class="sub-menu">
                    <li class="side-bar-widgets">
                        <p class="menu-title sm">REFERÊNTES AO SITE<span class="pull-right"><a href="#" class="create-folder"><i class="material-icons">add</i></a></span></p>
                        <ul class="folders">
                            <li>
                                <a href="#">
                                    <span class="badge badge-info"><?php
                                        $SQL = mysql_query ( "SELECT * FROM noticias WHERE status=1" );
                                        echo mysql_num_rows ( $SQL );
                                        ?></span>
                                    Notícias Publicadas </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="badge badge-success">><?php
                                        $SQL = mysql_query ( "SELECT * FROM categoria" );
                                        echo mysql_num_rows ( $SQL );
                                        ?></span>
                                    Categorias Ativas</a>
                            </li>
                            <li class="folder-input" style="display:none">
                                <input type="text" placeholder="Name of folder" class="no-boarder folder-name" name="">
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            </ul>

            <!-- Pagina de computador -->
            <div class="side-bar-widgets">
                <p class="menu-title sm">REFERÊNTES AO SITE <span class="pull-right"><a href="#" class="create-folder"> <i class="material-icons">add</i></a></span></p>
                <ul class="folders">
                    <li>
                        <a href="#">
                            <span class="badge badge-info"><?php
                                $SQL = mysql_query ( "SELECT * FROM noticias WHERE status=1" );
                                echo mysql_num_rows ( $SQL );
                                ?></span>
                            Notícias Publicadas </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="badge badge-success"><?php
                                $SQL = mysql_query ( "SELECT * FROM categoria" );
                                echo mysql_num_rows ( $SQL );
                                ?></span>
                            Categorias Ativas</a>
                    </li>
                    <li class="folder-input" style="display:none">
                        <input type="text" placeholder="Name of folder" class="no-boarder folder-name" name="">
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
            <!-- END SIDEBAR MENU -->
        </div>
    </div>
    <a href="#" class="scrollup">Scroll</a>
    <div class="footer-widget">
        <div class="pull-right">
            <a href="logout.php"><i class="material-icons">power_settings_new</i></a></div>
        <div class="pull-left">
            <label style="margin-top: 3px;font-size: 12px;">Desenvolvido por <a href="https://github.com/EQUIPEMASSIVE" target="_blank">MASSIVE TI</a></label>
        </div>
    </div>
    <!-- END SIDEBAR -->
