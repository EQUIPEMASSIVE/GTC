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


                            <section id="conteudo-noticia"><br><br></section>

				


			

                               

                                <ul class="rating inline-ul">
                                    <li><i class="fa fa-star amber-text"></i></li>
                                    <li><i class="fa fa-star amber-text"></i></li>
                                    <li><i class="fa fa-star amber-text"></i></li>
                                    <li><i class="fa fa-star amber-text"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>

                            </div>
                            <!--Product-->

                        </div>
                    </div>
                    <!--/.First row-->  


<hr>  <br> <br> <br><br> <br> <br><br> <br> 

<!--Author box-->
<div class="author-box">
    <!--Name-->
    <h3 class="h3-responsive text-center">Sobre o Autor</h3>
    <hr>
    <div class="row">
        <!--Avatar-->
        <div class="col-12 col-sm-2">
            <img src="imagens/autorescritor.jpg" class="img-fluid rounded-circle z-depth-2">
        </div>
        <!--Author Data-->
        <div class=" col-12 col-sm-10">
            <p><?php echo $rn["autorPub"]; ?></p>
            <div class="personal-sm">
                <a class="email-ic"><i class="fa fa-home"> </i></a>
                <a class="fb-ic"><i class="fa fa-facebook"> </i></a>
                <a class="tw-ic"><i class="fa fa-twitter"> </i></a>
                <a class="gplus-ic"><i class="fa fa-google-plus"> </i></a>
                <a class="li-ic"><i class="fa fa-linkedin"> </i></a>
                <a class="email-ic"><i class="fa fa-envelope-o"> </i></a>
            </div>
            <p>Vallar mergulhes...</p>
            <p class="hidden-md-down">Escritor, jornalista, professor universitário (curso de extensão, mas tá valendo), blogueiro, podcaster, filósofo de botequim e PHD em contar piadas sem graça.
            </p>
        </div>
    </div>
</div>
<!--/.Author box-->




    <?php } ?>


<br> <br> <br><br>




<div class="fb-comments" data-href="http://www.guiatecnologico.tk/noticia.php" data-width="100%" data-numposts="30"></div>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>




<div style="width: 600px;">
  <!-- Page plugin's width will be 500px -->
  <div class="fb-page" data-href="https://www.facebook.com/goodwaytech.isc/" data-width="500" data-hide-cover="false"  data-show-facepile="true"></div>
</div>



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
