<?php require_once 'includes/header.php';  ?>







<body>
    <br>
    


<br>
    <!--Content-->
<br>
    <div class="container">
        <div class="row-fluid">



<?php  



        $id_cat = $_GET["id"];
                                                                                      //Exibe a noticia em ordem descrecente por id da noticia
        $SQL_NC = mysql_query("SELECT * FROM noticias WHERE categoria=$id_cat AND status='1' ORDER BY id_noticia DESC");
  
        if(mysql_num_rows($SQL_NC) != 0){
        while ($nc = mysql_fetch_array($SQL_NC)){
            $id_news        = $nc["id_noticia"];
            $titulo_news    = $nc["titulo"];
            $conteudo_news  = $nc["conteudo"];
            $imagem_news    = $nc["imagem"];
            $datapub_news   = $nc["datapub"];

            $datapub_news = explode("-", $nc["datapub"]);
              $dataEX = $datapub_news[2]."/".$datapub_news[1]."/".$datapub_news[0];//Converte o estilo de data para brasileira





              @$id_rn = $_GET["id"];
          $SQL_RN = mysql_query("SELECT * FROM noticias INNER JOIN categoria ON (noticias.categoria = categoria.id_categoria) WHERE id_noticia='$id_rn'");

            while ($rn = mysql_fetch_array($SQL_RN)) {

            }
      ?>




         


 
            <!--First row-->
            
               <div class="col-md-6">
                <!--Card-->
                <div class="card-block" style="min-height: 400px; max-width: auto; background-color: white; padding-bottom: 10px;">


                    <!--Card Content-->
                   
                        <!--Title-->
                        <h1><a href="noticia.php?id=<?php echo $src['id_noticia'];  ?>"><?php echo $src['titulo']; ?></a></h1>
                        <p>Por: <?php echo $src['autorPub']; ?></p>

                                    <!--Card Image-->
                     <div class="card-block view overlay hm-zoom">  
                        <img src="cp/imagens/imgnoticia/<?php echo $src['imagem']; ?>" alt="<?php echo $src['titulo']; ?>">
                        
                       </div> 
                    
                      

                                    <!--TEXTO-->
                  
                        <p><?php echo substr($src['conteudo'], 0, 0); ?></p>
                        
                        
                        

                        
                    

                    
                   <a type="button" class="btn btn-primary btn-lg btn-block"  href="noticia.php?id=<?php echo $src['id_noticia']; ?>">...Leia Mais</a>
                   
                   
            <!--/Post data-->


                </div>
          </div>

          

     <br> 
        

  
                    </div>
                    <!--/.Card content-->
   <?php } } else {?>



            <!--First row-->
           
                <div class="col-md-12">
                <!--Card-->
                <div class="card wow fadeIn"  data-wow-delay="0.1s">
    <!--Card content ERROR sem noticia-->
                    <div class="card-block" style="text-align:center">
                    <br> <br> <br> <br> <br> <br> <br> <br> <br> 
                        <!--Title-->
                       
                        <h1 class="h1-responsive" class="card-title">Não há notícias para esta categoria! =(</h1> </a> 

                        <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> 
                        </div> </div>


                                     




 <?php } ?> 

        </div> <!--/ Row Main Layout--> 

    </div>     <!--/.Container Main Layout-->  </h1></div></div></div></h1></h5></div></div></div></div></div></body>

<?php require_once 'includes/footer.php'; ?>

