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

                                
                                
                                <hr>
                                <!--Texto-->

                                <p> <?php echo $rn["conteudo"]; ?> </p>


                            <section id="conteudo-noticia"><br><br></section>

				


				<?php } ?>


                                

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



</body>


</main>

<?php require_once 'includes/footer.php'; ?>