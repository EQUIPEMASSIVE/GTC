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


<<<<<<< HEAD
						
                 <!--Main column-->
                <div class="col-lg-12">

                    <!--First row-->
                    <div class="row wow fadeIn" data-wow-delay="0.4s">
                        <div class="col-md-12">

                            <!--Product Card-->
                            <div class="product-wrapper">
                           <br>

                          <h1 class="text-center"> <?php echo $rn["titulo"]; ?> </h1>  <br>  


               
                    <p class="text-center">Data Publicação: <?php echo $dataEX; ?> Por: <?php echo $rn["autorPub"]; ?> </p>

                    

                 </p>
	

                                <!--Featured image-->
                                <div class="view overlay hm-white-light z-depth-1-half">
                                <h3 class="price"><span class="badge red darken-1"> <?php echo $rn["nome_categoria"]; ?></span></h3>
                                    <img src="cp/imagens/imgnoticia/<?php echo $rn["imagem"];?>" alt="<?php echo $rn["titulo"];?>" class="img-fluid>
                                    <div class="mask">
                                    </div>
                                                        <button type="button" class="btn btn-elegant btn-sm">Data do Evento: 26 Fevereireo ?></button> 
                    <button type="button" class="btn btn-elegant btn-sm">Horario: 19:00h</button>
                    <button type="button" class="btn btn-elegant btn-sm">Local: Auditório David Mufarrej, Belém-PA </button>
                                </div>
                                <!--/.Featured image-->

                                <br>
=======
				<section id="info-noticias">

				<h1><?php echo $rn["titulo"]; ?></h1>
				<p>Data Publicação: <?php echo $dataEX; ?> Autor: <?php echo $rn["autorPub"]; ?> Categoria: <?php echo $rn["nome_categoria"]; ?></p>	
				
				</section>
>>>>>>> origin/master

                                
                                
                                <hr>
                                <!--Texto-->

                                <p> <?php echo $rn["conteudo"]; ?> </p>

<<<<<<< HEAD
=======

				<section id="conteudo-noticia"><br><?php echo $rn["conteudo"]; ?><br></section>
>>>>>>> origin/master

                            <section id="conteudo-noticia"><br><br></section>

				



				<?php } ?>

<<<<<<< HEAD

                                

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





                </div>
                <!--/.Main column-->

            </div>
        </div>
        <!--/.Main layout-->

 


</h1></div></div></div></div></section></div></div>

=======
			
				
				


	<div id="comentarios" class="comentarios"><a name="coments-facebook-single"></a>
		<P>----------------</P>
		<P>---------</P>
		<P>--</P>


        <span class="aviso-comentario">Atenção! Os comentários do site são via Facebook, se quiser gritar algo, esteja logado! Lembre-se que o comentário é de inteira responsabilidade do autor.</span>
      	

		<P>--</P>
		<P>---------</P>
		<P>----------------</P>



<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_PT/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script>


	      	<div class="fb-comments fb_iframe_widget fb_iframe_widget_fluid" data-href="http://www.guiatecnologico.16mb.com/" data-width="100%" data-numposts="5" fb-xfbml-state="rendered">

	      	<span style="height: 769px;">

	      	<iframe id="f27b99a49a82cf8" name="f4e94f0d38abda" scrolling="no" style="border: medium none; overflow: hidden; height: 769px; width: 100%;" title="Facebook Social Plugin" class="fb_ltr fb_iframe_widget_lift" 
	      			src="#"></iframe></span>

	      </div>
</div>
			

				



	  	   


>>>>>>> origin/master


<<<<<<< HEAD
</body>
=======
>>>>>>> origin/master


</main>

<?php require_once 'includes/footer.php'; ?>