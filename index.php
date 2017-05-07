
<?php
 require_once 'includes/header.php';
?>





<br><br>
        <div class="owl-theme owl-carousel" >
            
                <?php       //Na ordem do recente para o ultimo
                            $SQL_B = mysql_query("SELECT id_noticia, imagem, titulo FROM noticias INNER JOIN categoria ON(noticias.categoria = categoria.id_categoria) WHERE nome_categoria ='Tecnologia'  ORDER BY id_noticia DESC LIMIT 5");//aqui sao mostradas somente a noticia pelo nome da categoria (nome_categoria)


                            while ($bn = mysql_fetch_array($SQL_B)) {
                            
                ?>
       
            <div>
                <a href="noticia.php?id=<?php echo $bn['id_noticia']; ?>" ><img src="cp/imagens/imgnoticia/<?php echo $bn['imagem']; ?>" alt="Postagem 1"/></a>

                <h1 class="h1-responsive"> <a href="noticia.php?id=<?php echo $bn['id_noticia']; ?>" style="color: #000"><?php echo $bn['titulo'];?></h1></a>
            </div>
            
            <?php } ?>
        </div><!--/owl-carousel-->

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>

        
<br><hr>
   

<main>
    <br>




    <!--Content-->

    <div class="container">
        <div class="row">



                             <?php         
                            $SQL_B = mysql_query("SELECT * FROM noticias INNER JOIN categoria ON (noticias.categoria = categoria.id_categoria) WHERE status = '1' ORDER BY id_noticia DESC");//sao mostradas somente as noticias com o status 1 "noticias compostas e publicadas", ou seja noticias publicadas no index.

                            while ($pusha = mysql_fetch_array($SQL_B)) {
                            
                        ?> 




            <!--First row-->
           
                <div class="col-md-12">
                <!--Card-->
                <div class="card wow fadeIn"  data-wow-delay="0.3s">



                    <!--Card image-->
                    <div class="card collection-card">


                    
                        <img src="cp/imagens/imgnoticia/<?php echo $pusha['imagem']; ?>"  class="img-responsive" alt="Titulo na Notícia"/>  

                        

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
                        <p style="color: #696969" class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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

