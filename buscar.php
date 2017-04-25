<?php require_once 'includes/header.php';  ?>

<br><br>
	<main>
				<div class="container">
		

					<br>
					<h1 class="jumbotron">Resultados da busca para   <?php echo $termo = $_GET["busca-organica"]; ?></h1> 
					

					<br>
					<h1>Resultado da busca para:   <?php echo $termo = $_GET["busca-organica"]; ?></h1> 
					<br>

						<?php 





							$termo = $_GET["busca-organica"];
																							//Faz a busca organica por temos da tag
							$busca = mysql_query("SELECT * FROM noticias WHERE titulo LIKE '%$termo%' OR tags LIKE '%$termo%'") or die(mysqli_error());

							if(mysql_num_rows($busca) !=0 ) {
<<<<<<< HEAD
								while ($src = mysql_fetch_array($busca)) {											
						?>
						
						

						

						

				<div class="row-fluid">
				        <div class="col-md-13">


				            <!--Card Content-->
				            <div class="jumbotron">
				                <!--Title-->
				                <h1><a href="href="noticia.php?id=<?php echo $src['id_noticia']; ?>"><?php echo $src['titulo']; ?></a></h1>
				                

				                            <!--Card Image-->
				            <div class="card">
				                <img src="cp/imagens/imgnoticia/<?php echo $src['imagem']; ?>" alt="<?php echo $src['titulo']; ?>">
				                <a>
				                    <div class=""></div>
				                </a>
				            </div>
				                <br> 

				                            <!--TEXTO-->
				            <div class="excerpt">
				                <p><?php echo substr($src['conteudo'], 0, 0); ?></p>
				                
				                
				                

				                
				            </div>

				            
				           <a type="button" class="btn btn-primary btn-lg btn-block"  href="noticia.php?id=<?php echo $src['id_noticia']; ?>">...Leia Mais</a>
				           
				            </div>
            <!--/Post data-->


        				</div>
    			</div>
=======
								while ($src = mysql_fetch_array($busca)) {
							

										
						?>
						
						<section id="buscar">
						<h2><?php echo $src['titulo']; ?></h2>
						<section id="buscar-img"><img src="cp/imagens/imgnoticia/<?php echo $src['imagem'];?>" alt="<?php echo $src['titulo']; ?>" /></section>
						<section id="buscar-conteudo"><?php echo substr($src['conteudo'], 0, 900); ?><a href="noticia.php?id=<?php echo $src['id_noticia']; ?>">...Continue Lendo</a></section>	
						</section>
>>>>>>> origin/master

    					<?php } } else {  ?>
						<section id="buscar">
						<h2 class="title">A busca não retornou resuldado! =( </h2>

						</section>
						<?php } ?>


<<<<<<< HEAD
			</div>
=======
			</section><!--conteudo-->
			
		</section>	<!--content-->
>>>>>>> origin/master

	</main>


<?php require_once 'includes/footer.php';  ?>