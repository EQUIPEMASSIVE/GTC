<?php require_once "configuration.php" ?>


<!DOCTYPE html>
<html lang="pt-br">

<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>(97% Concluido) v0.2-beta </title>
     
     
 
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">


    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    



    <!--CONFIGURAÇAO SLIDE NOVO HESRON ------------------------------------------------- -->

    <meta name="description" content="Descrição da Página">
    
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <meta property="og:locale" content="pt_BR" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="http://www.nomedosite.com.br/imagens/facebook.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="628">
    <meta property="og:site_name" content="Nome do Site">
    <meta property="og:title" content="Titulo da Página" />
    <meta property="og:description" content="Descrição da Página" />
    <meta property="og:url" content="http://www.nomedosite.com.br" />
    
    <link rel="shortcut icon" href="imagens/icons/favicon.ico" type="image/x-icon" />    
    <link rel="apple-touch-icon" href="imagens/icons/apple-touch-icon.png" />

    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>
    <link href="css/font.css" rel="stylesheet" type="text/css"/>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/animate.css" rel="stylesheet" type="text/css" /> 

     <!--CONFIGURAÇAO SLIDE NOVO HESRON ------------------------------------------------- -->

    


    <!-- SCRIPTS -->

    <!-- Template styles -->
    <style rel="stylesheet">
        /* TEMPLATE STYLES */
        /* Necessary for full page carousel*/
        
        html,
        body {
            height: 100%;
        }
        /* Navigation*/
        
        .navbar {
            background-color: #000;
        }
        
        .top-nav-collapse {
            background-color: #000;
        }
        
        footer.page-footer {
            background-color: #000;
        }
        
        @media only screen and (max-width: 768px) {
            .navbar {
                background-color: #000;
            }
        }
        
        .scrolling-navbar {
            -webkit-transition: background .5s ease-in-out, padding .5s ease-in-out;
            -moz-transition: background .5s ease-in-out, padding .5s ease-in-out;
            transition: background .5s ease-in-out, padding .5s ease-in-out;
        }
        /* Carousel*/
        
        .carousel {
            height: 15%;
        }
        
        @media (max-width: 1080px) {
            .carousel {
                height: 15%;
            }
        }
        
        .carousel-item,
        .active {
            height: 100%;
        }
        
        .carousel-inner {
            height: 100%;
        }
        
        /*Caption*/
        
        .flex-center {
            color: #000;
        }
    </style>

</head>


<body>

    <!--Navbar-->
    <nav class="navbar navbar-toggleable-md navbar-dark fixed-top scrolling-navbar">
               <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span> 
            </button>
                   
                   <a class="navbar-brand" href="index.php"><img src="../img/logoIndex.png" /></a>


            <div class="collapse navbar-collapse" id="navbarNav1">



                <ul class="navbar-nav mr-auto">

                    <li class="nav-item active">
                        <a class="nav-link" href="index2.html">Inicio<span class="sr-only">(current)</span></a>
                    </li>



                    <?php  
                    $SQL = mysql_query("SELECT * FROM categoria");
                    while ($lh = mysql_fetch_assoc($SQL)) {
                    ?>
                    <li class="nav-item">
                          <a class="nav-link" href="categoria.php?id=<?php echo $lh['id_categoria']; ?>"><?php echo $lh['nome_categoria']; ?></a> 
                    </li>
                    <?php } ?> 




                    <li class="nav-item">
                        <a class="nav-link" href="cp/index.php">Login CP</a>
                    </li>

                </ul>


                
            </div>
            <form class="form-inline waves-effect waves-light" action="buscar.php" method="GET">
                    <input class="form-control" type="text" placeholder="Buscar..." name="busca-organica" id="inputError" >
                    <span class="glyphicon glyphicon-search"></span>
                    
                </form>
        </div>
    </nav>
    <!--/.Navbar-->


<br> <br> 
