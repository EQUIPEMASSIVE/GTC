
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

  

                        <?php                  //SELECIONA TODOS DADOS DAS TABELAS noticias "JUNÇÃO INTERNA" com categoria ONDE noticia e categoria tem que ser = categoria.id_categoria pra nao duplicar                                     //Na ordem do recente para o ultimo
                            $SQL_B = mysql_query("SELECT * FROM noticias INNER JOIN categoria ON (noticias.categoria = categoria.id_categoria)  ORDER BY id_noticia DESC");

                            while ($pusha = mysql_fetch_array($SQL_B)) {
                            
                        ?>  


        <!--Main layout-->
        <div class="container"> 
                <div class="row-fluid">   


                        
          


<!--Section: Blog v.4-->
<section class="section section-blog-fw">

               
                                            
                       
                   



    <!--First row-->
    <div class="row-fluid">
        <div class="col-md-14">


            <!--Card Content-->
          
                
                            <!--Card Image-->

            <div class="card block">
            
                <h3 href="categoria.php?id=<?php echo $pusha['id_categoria']; ?>" class="price"><span class="badge red darken-1"> <?php echo $pusha['nome_categoria']; ?></span></h3>
            
                <img src="cp/imagens/imgnoticia/<?php echo $pusha['imagem']; ?>" href="noticia.php?id=<?php echo $pusha['id_noticia']; ?>" alt="Titulo na Notícia" /> <center>
                <p> <button type="button" class="btn btn-elegant btn-sm">Data do Evento: <?php echo $pusha['datapub'];?></button> 
                    <button type="button" class="btn btn-elegant btn-sm">Horario: 19:00h</button>
                    <button type="button" class="btn btn-elegant btn-sm">Local: Auditório Unama, Belém-PA </button>
                    <button type="button" class="btn btn-elegant btn-sm">Categoria:<?php echo $pusha['nome_categoria'];?></button>

                 </p>

                    <!--Title--> 

                <h1><a class="h1" href="noticia.php?id=<?php echo $pusha['id_noticia']; ?>"><?php echo $pusha['titulo'];?></a></h1>

<br>
<h9>
                 
                Publicado no dia: <?php echo $pusha['datapub'];?>


                    </h9>
</center>
                   <div class="media-body">

               


                   


                   
            
            </div>
     
       

                
            </div>


                <br> <br>

                           
         
           

           </div>
            <!--/Post data-->

           
        </div>
    </div>

      <?php } ?>
    <!--/First row-->
        </div>     <!--/.Class="row-fluid"--> 
    </div>    <!--/.Content Container-->
</section>
<!--/Section: Blog v.4-->
</div></div>





</main>

    <?php require_once 'includes/footer.php'; ?>
