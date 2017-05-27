<?php require_once 'includes/header.php';  ?>

<br><br>
  <main>
        <div class="container">
        <div class="row-fluid">
    

          <br>
          <h4 class="jumbotron" style="margin: 33px 0px -15px 0px; padding: 10px 10px;">Resultados da busca para:   <?php echo @$termo = $_GET["busca-organica"]; ?></h4> 
          

            
            
            
            <?php
            @$termo = $_GET["busca-organica"];
              $busca = mysql_query("SELECT * FROM noticias  WHERE titulo LIKE '%$termo%' OR tags LIKE '%$termo%' ORDER BY  dataPub, status='1'") or die(mysqli_error());
              
              if(mysql_num_rows($busca) !=0 ) {
                while ($src = mysql_fetch_array($busca)) {

            ?>
            

            
            <hr>
        
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
          </div>

              <?php } } else {  ?>
            <section id="buscar">
            <h2 class="title" style="color: white;">A busca não retornou resuldado! =( </h2>

            </section>
            <?php } ?>


      </div>

  </main>




    
   
<?php require_once 'includes/footer.php';  ?>
