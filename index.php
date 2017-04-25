
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
                <div class="full-bg-img flex-center red-text">
                    <ul class="animated fadeIn col-md-12">

                     <li>
                          <p class="badge black">New evento treelele novinho em folha mesmewquehwqiuEHWQIEUWQHEIUWQHEWQUIeheuiheiuwqhewquiehwquiehwquiwho</p>
                         
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
                            <p class="badge black">New evento treelele novinho em folha mesmewquehwqiuEHWQIEUWQHEIUWQHEWQUIeheuiheiuwqhewquiehwquiehwquiwho</p>
                        </li>

                    </ul>
                </div>
                <!-- /.Caption -->
                
            </div>
            <!--/.Second slide -->

            <!-- Third slide -->
            <div class="carousel-item view hm-black-light" style="background-image: url('img/postbg/3p.png'); ;">
                
                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                    <ul class="animated fadeIn col-md-12">
                       
                            <p>Nome evento vent3</p>
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
    <br>




    <!--Content-->

    <div class="container">
        <div class="row">



                             <?php         
                            $SQL_B = mysql_query("SELECT * FROM noticias INNER JOIN categoria ON (noticias.categoria = categoria.id_categoria)  ORDER BY id_noticia DESC");

                            while ($pusha = mysql_fetch_array($SQL_B)) {
                            
                        ?> 




            <!--First row-->
           
                <div class="col-md-12">
                <!--Card-->
                <div class="card wow fadeIn"  data-wow-delay="0.3s">



                    <!--Card image-->
                    <div class="card collection-card">


                    
                        <img src="cp/imagens/imgnoticia/<?php echo $pusha['imagem']; ?>"  class="img-responsive" alt="Titulo na Notícia" />  

                        

                            <div class="mask waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--/.Card image-->

                    <!--Card content-->
                    <div class="card-block" style="text-align:center">
                        <!--Title-->
                        <h5 class="price"><a href="categoria.php?id=<?php echo $pusha['id_categoria']; ?>"> <span class="badge btn-elegant"> <?php echo $pusha['nome_categoria']; ?></span></h5>   </a>

                        <h1 class="h1-responsive"> <a href="noticia.php?id=<?php echo $pusha['id_noticia']; ?>" style="color: #000" class="card-title"><?php echo $pusha['titulo'];?></h1> </a>
                        

                        <!--Text-->
                        <p style="color: #696969" class="card-text"><?php echo $pusha['conteudo'];?></p>
                        <a href="noticia.php?id=<?php echo $pusha['id_noticia']; ?>" class="black-text d-flex flex-row-reverse"><h7 class="waves-effect p-2">Leia mais... <i class="fa fa-chevron-right"></i></h7></a>
                      
                        

                        <span style="color: #C0C0C0" ><i class="fa fa-clock-o" ></i> Publicado dia: <?php echo $pusha['datapub'];?></span>

                        
                    </div>
                    <!--/.Card content-->

                </div>
                <!--/.Card--> <br> <br>
            </div>
            <!--First columnn-->



 <?php } ?> 

        </div> <!--/ Row Main Layout--> 

    </div>     <!--/.Container Main Layout--> 
</main>
<?php require_once 'includes/footer.php'; ?>

