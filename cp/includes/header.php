<!--adicionado a sessao do usuario e mostrando seu nome-->
<?php session_start(); 


require_once "includes/configuration.php";

require "includes/verificar.php";

@$Usuario = $_SESSION["usuario"];
@$Senha = $_SESSION["senha"];


$SQL = mysql_query("SELECT nome, imgPerfil FROM administradores WHERE usuario= '$Usuario' AND senha= '$Senha' ");

?>
<html lang="pt_br">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" type="text/css" href="css/default.css" media="screen" />
		<script type="text/javascript" src="jquery-1.9.1.js"></script>
		<script type="text/javascript" src="js/default.js"></script>
        
        <!DOCTYPE html>

    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>GTC - PAINEL DE CONTROLE NOVO</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="css/style.css" rel="stylesheet" />
     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	</head>
	
<body>
        
<!-- HEADER END-->
    <div class="navbar navbar-inverse set-radius-zero">
    
        <div class="container">
            <div class="navbar-header">
            <img src="img/logo.png"/>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div class="left-div">
                <div class="user-settings-wrapper">
                    <ul class="nav">

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                <span class="glyphicon glyphicon-user" style="font-size: 25px;"></span>
                            </a>
                          <div class="dropdown-menu dropdown-settings">
                             <!--Nome de usuario com base no banco de dados-->
                        <?php
                        
                        while($linha = mysql_fetch_assoc($SQL)){
                            @$nomeUser = $linha['nome'];
                            @$imgpUser = $linha['imgPerfil'];
                        }
                        
                        ?> 
                         
                            <div class="media">
                                    <a class="media-left" href="#">
                                        <img src="imagens/perfil/<?php echo @$imgpUser; ?>" alt="Imagem de Perfil" width="85" height="85" />
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><?php  echo @$nomeUser; ?></h4>
                                        <h5>Administrador</h5>

                                    </div>
                              </div>
                                
                              <a href="alterar-perfil.php" class="btn btn-info btn-sm">Perfil</a>&nbsp; <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>

                            </div>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a class="menu-top-active" href="inicial.php">Página Inicial</a></li>
                            <li><a href="gerenciar-noticia.php">Gerenciar Noticia</a></li>
                            <li><a href="gerenciar-categoria.php">Gerenciar Categorias</a></li>
                            <li><a href="administracao-portal.php">Administração do Portal</a></li>
                             

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- MENU SECTION END-->


		
		
