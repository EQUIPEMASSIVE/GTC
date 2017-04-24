
<?php
 require_once 'includes/header.php';
?>



    <!--Carousel Wrapper-->
    <div id="carousel-example-3" class="carousel slide carousel-fade white-text" data-ride="carousel" data-interval="false">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-3" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-3" data-slide-to="1"></li>
            <li data-target="#carousel-example-3" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->

        <!--Slides-->
        <div class="carousel-inner" role="listbox">

            <!-- First slide -->
            <div class="carousel-item active view hm-black-light" style="background-image: url('img/postbg/1p.jpg'); background-repeat: no-repeat; background-size: cover;">
                
                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                    <ul class="animated fadeIn col-md-12">
                        <li>
                            <h1 class="h1-responsive">Texto titulo slide 1</h1></li>
                        <li>
                            <p>Legenda do slide um</p>
                        </li>
                        <li>
                            <a target="_blank" href="#" class="btn btn-info btn-lg" rel="nofollow">Leia Mais!</a>
                        </li>
                    </ul>
                </div>
                <!-- /.Caption -->
                
            </div>
            <!--/.First slide-->

            <!-- Second slide -->
            <div class="carousel-item view hm-black-light" style="background-image: url('img/postbg/2p.jpg'); background-repeat: no-repeat; background-size: cover;">
                
                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                    <ul class="animated fadeIn col-md-12">
                        <li>
                            <h1 class="h1-responsive">1DSSD0 Reuheuhueh tgelrllrelterheuhes </h1>
                        </li>
                        <li>
                            <p> euheuheuh TRLELEL textooo!</p>
                        </li>
                        <li>
                            <a target="_blank" href="#" class="btn btn-info btn-lg" rel="nofollow">Leia Mais</a>
                        </li>
                    </ul>
                </div>
                <!-- /.Caption -->
                
            </div>
            <!--/.Second slide -->

            <!-- Third slide -->
            <div class="carousel-item view hm-black-light" style="background-image: url('img/postbg/3p.png'); background-repeat: no-repeat; background-size: cover;">
                
                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                    <ul class="animated fadeIn col-md-12">
                        <li>
                            <h1 class="h1-responsive">TrelelelTHEUEHUEH</h1></li>
                        <li>
                            <p>Truhrueh textotheuthu</p>
                        </li>
                        <li>
                            <a target="_blank" href="#" class="btn btn-default btn-lg" rel="nofollow">Leia Mais</a>
                        </li>
                    </ul>
                </div>
                <!-- /.Caption -->
                
            </div>
            <!--/.Third slide-->
        </div>
        <!--/.Slides-->

        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-3" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-3" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->
    <br>

<main>


       

        <!--Main layout-->
        <div class="container"> 
                <div class="row-fluid">   


               


<!--Section: Blog v.4-->
<section class="section section-blog-fw">


                    <!--Categoria 1_____________________________CATEGORIA DIVERSOS______D, dv, dvn___________________________________________-->                
                    <?php

                    $SQL_F = mysql_query("SELECT * FROM categoria WHERE nome_categoria='Eventos'");

                    while ($ft = mysql_fetch_array($SQL_F)){
                        $id_ft = $ft['id_categoria'];
                    }

                    $SQL_FN = mysql_query("SELECT * FROM noticias  WHERE categoria='$id_ft' ORDER BY id_noticia DESC LIMIT 3");

                    while ($ftn = mysql_fetch_array($SQL_FN)) {
                        
                    ?>

    <!--First row-->
    <div class="row-fluid">
        <div class="col-md-13">


            <!--Card Content-->
            <div class="jumbotron">
                <!--Title-->
                <h1><a><?php echo $ftn['titulo']; ?></a></h1>
                <p><b>Categoria</b>: <a href="categoria.php?id=<?php echo $id_ft; ?>">Evento</a> </p>

                            <!--Card Image-->
            <div class="card">
                <img src="cp/imagens/imgnoticia/<?php echo $ftn['imagem']; ?>" alt="<?php echo $ftn['titulo']; ?>">
                <a>
                    <div class=""></div>
                </a>
            </div>
                <br> <br>

                            <!--TEXTO-->
            <div class="excerpt">
                <p>Descrição rápida do evento, texto texto texto texto teoxtoe texoto texoteo teoxoteoewqhiw.
                </p>

                <br> <b> 
            </div>

            
            <button type="button" class="btn btn-primary btn-lg btn-block">Leia mais</button> </b>
            </div>
            <!--/Post data-->


        </div>
    </div>

      <?php } ?>
    <!--/First row-->

    <hr>




        </div>     <!--/.Class="row-fluid"--> 
    </div>    <!--/.Content Container-->








    <hr>

</section>
<!--/Section: Blog v.4-->




</main>

	<?php require_once 'includes/footer.php'; ?>
