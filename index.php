
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


       

        <!--Main layout-->
        <div class="container"> 
                <div class="row-fluid">   


               


<!--Section: Blog v.4-->
<section class="section section-blog-fw">


                    <!--Categoria 1_____________________________CATEGORIA DIVERSOS______D, dv, dvn___________________________________________-->                
                    <?php

                    $SQL_F = mysql_query("SELECT * FROM categoria ORDER BY nome_categoria");
                    while ($ft = mysql_fetch_array($SQL_F)){

                        $nome_catIndex       = $ft["nome_categoria"];
                        
                    }


                    $SQL_FN = mysql_query("SELECT * FROM noticias  ORDER BY datapub DESC LIMIT 20");

                   

                    if(mysql_num_rows($SQL_FN) != 0){

                while ($ix = mysql_fetch_array($SQL_FN)){

                        $id_index        = $ix["id_noticia"];
                        $titulo_index    = $ix["titulo"];
                        $conteudo_index  = $ix["conteudo"];
                        $imagem_index    = $ix["imagem"];
                        $dataPub_index    = $ix["datapub"];

                        $dataPub_index = explode("-", $ix["datapub"]);
              $dataEX = $dataPub_index[2]."/".$dataPub_index[1]."/".$dataPub_index[0];
                        
                    ?>







    <!--First row-->
    <div class="row-fluid">
        <div class="col-md-14">


            <!--Card Content-->
          
                
                            <!--Card Image-->

            <div class="card">
            
                <h3 class="price"><span class="badge red darken-1"> <?php echo $nome_catIndex; ?></span></h3>
                <h1><a class="h1" href="noticia.php?id=<?php echo $id_index;?>"><?php echo $titulo_index; ?></a></h1>
                <img src="cp/imagens/imgnoticia/<?php echo $imagem_index; ?>" alt="Titulo na Notícia" /> <center>
                <p> <button type="button" class="btn btn-elegant btn-sm">Data do Evento: <?php echo $dataEX; ?></button> 
                    <!--<button type="button" class="btn btn-elegant btn-sm">Horario: 19:00h</button>
                    <button type="button" class="btn btn-elegant btn-sm">Local: Auditório David mufarrej, Belém-PA </button>
                    <button type="button" class="btn btn-elegant btn-sm">Categoria: <?php echo $nome_catIndex; ?></button>

                 </p>

                    <!--Title--> 

                

<br>
<h9>
                 
               

                    </h9>
</center>
                   <div class="media-body">

               


                   


                   
            
            </div>
     
       

                
            </div>


                <br> <br>

                           
         
           

           </div>
            <!--/Post data-->

            <?php } } else {?>                           

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
