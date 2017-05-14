  <?php require_once 'includes/header.php';  ?>


<br>


<main>

<body style="background-color:white">
    
        <!--Main layout-->
                <div class="container"> 
                        <div class="row-fluid">   

             


                            <!--Section: Blog v.4-->
                            <section class="section section-blog-fw">

                <?php

                    @$id_rn = $_GET["id"];
                    $SQL_RN = mysql_query("SELECT * FROM noticias INNER JOIN categoria ON (noticias.categoria = categoria.id_categoria) WHERE id_noticia='$id_rn'");

                        while ($rn = mysql_fetch_array($SQL_RN)) {
                            $data = explode("-", $rn["datapub"]);
                            $dataEX = $data[2]."/".$data[1]."/".$data[0];
                        

                ?>


            <br>            
                 <!--Main column-->
                <div class="col-lg-12">

                    <!--First row-->
                    <div class="row wow fadeIn" data-wow-delay="0.4s">
                        <div class="col-md-12">

                            <!--Product Card-->
                            <div class="product-wrapper" >
                         <br>  
                    <h1 class="h1-responsive" > <a href="index.php" style="color: #000" class="text-center"><strong><?php echo $rn['titulo'];?></h1> </a></strong>
                         
                        
                   
                      <span style="color: #808080" > Publicado dia: <?php echo $dataEX; ?> &nbsp&nbsp  </span>
                      <span style="color: #808080" > Por: <?php echo $rn["autorPub"]; ?> &nbsp&nbsp  </span>



                     

                    

                 </p>
    


                    <!--Card image-->
                    <div class="card collection-card">


                    
                        <img src="cp/imagens/imgnoticia/<?php echo $rn['imagem']; ?>"  class="img-responsive" alt="Titulo na Notícia" />  

                        

                            <div class="mask waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--/.Card image-->



                                <br>

                                                                
                                <hr>
                                <!--Texto-->

                                <p class="text-justify"><?php echo $rn["conteudo"]; ?></p>


                           

                            </div>
                            <!--Product-->

                        </div>
                    </div>
                    <!--/.First row-->  


<hr>  <br> <br> <br><br> <br> <br><br> <br> 






    <?php } ?>


<br> <br> <br><br>




<?php  

$url="www.guiatecnologico.16mb.com/noticia.php?id=".$_GET['id']."";
echo '<div class="fb-comments" data-href="'.$url.'" data-num-posts="2" data-width="470"></div>';


?>


<div id="fb-root"></div>
<script>(function(d, s, id) {
 var js, fjs = d.getElementsByTagName(s)[0];
 if (d.getElementById(id)) return;
 js = d.createElement(s); js.id = id;
 js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
 fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>





<br> <br> <br><br>




                </div>
                <!--/.Main column-->

            </div>
        </div>
        <!--/.Main layout-->

 


</h1></div></div></div></div></section></div></div>



</body>




</main>

<?php require_once 'includes/footer.php'; ?>