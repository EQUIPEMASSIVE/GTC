<?php require_once 'includes/header.php';  ?>

<main>>


        <!--Main layout-->
                <div class="container"> 
                        <div class="row-fluid">   

             


                            <!--Section: Blog v.4-->
                            <section class="section section-blog-fw">




      <?php  



        $SQL_CT = mysql_query("SELECT * FROM categoria WHERE nome_categoria");
                    while ($ct = mysql_fetch_array($SQL_CT)){

                        $nome_catIndex       = $ct["nome_categoria"];//puxa o nome da categoria
                        
                      }







        $id_cat = $_GET["id"];
                                                                                      //Exibe a noticia em ordem descrecente por id da noticia
        $SQL_NC = mysql_query("SELECT id_noticia, titulo, conteudo, imagem, datapub FROM noticias WHERE categoria=$id_cat ORDER BY id_noticia DESC");
  
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







 <br>
    <!--First row-->
    <div class="row-fluid">
        <div class="col-md-14">


            <!--Card Content-->
            <div class="jumbotron">
                
                            <!--Card Image-->

            <div class="card collection-card">
            

                <h3><a  href="noticia.php?id=<?php echo $id_news;?>"> <?php echo $titulo_news; ?></a></h3>
                <p> <button type="button" class="btn btn-elegant btn-sm">Categoria: <?php echo $rn["nome_categoria"]; ?></button>
                    <button type="button" class="btn btn-elegant btn-sm">Publicado no dia: <?php echo $dataEX; ?>  </button></p>
                <img src="cp/imagens/imgnoticia/<?php echo $imagem_news;?>" alt="Titulo na Notícia" /> 

                   <div class="media-body">

                   <!--Title--> <br>
                   
                


                   


                   
            
            </div>


     
XXXXXXXXXXXXXXX

            </div>
               

                            <!--TEXTO-->
            <div class="excerpt">
                <p><?php echo  substr($conteudo_news, 0, 900); ?>...</p>
                <a type="button" class="btn btn-primary btn-lg btn-block" href="noticia.php?id=<?php echo $id_news; ?>">Ler Mais...</a> 
           </div> 

                
            </div>

</div>

          

        <?php } } else {?>

        <section id="categoria-news-error">
        <h1> Não há notícias para esta categoria! =( </h1>
        </section>


        
        <?php } ?>

                     </div>
                  </div>
              </div>
           </div><!--/.Class="row-fluid2"-->
        </div>     <!--/.Class="row-fluid"--> 
    </div>    <!--/.Content Container-->
</section> <!--/Section: Blog v.4-->






</main>

    <?php require_once 'includes/footer.php'; ?>