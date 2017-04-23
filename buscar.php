<?php require_once 'includes/header.php';  ?>


	<main>
		
		<section id="content">
			
			<section id="conteudo">

					<br>
					<h1>Resultado da busca para:   <?php echo $termo = $_GET["busca-organica"]; ?></h1> 
					<br>

						<?php 

							$termo = $_GET["busca-organica"];
																							//Faz a busca organica por temos da tag
							$busca = mysql_query("SELECT * FROM noticias WHERE titulo LIKE '%$termo%' OR tags LIKE '%$termo%'") or die(mysqli_error());

							if(mysql_num_rows($busca) !=0 ) {
								while ($src = mysql_fetch_array($busca)) {
							

										
						?>
						
						<section id="buscar">
						<h2><?php echo $src['titulo']; ?></h2>
						<section id="buscar-img"><img src="cp/imagens/imgnoticia/<?php echo $src['imagem'];?>" alt="<?php echo $src['titulo']; ?>" /></section>
						<section id="buscar-conteudo"><?php echo substr($src['conteudo'], 0, 900); ?><a href="noticia.php?id=<?php echo $src['id_noticia']; ?>">...Continue Lendo</a></section>	
						</section>

						<?php } } else {  ?>
						<section id="buscar">
						<h2>A busca não retornou resuldado! =( </h2>

						</section>
						<?php } ?>


			</section><!--conteudo-->
			
		</section>	<!--content-->

	</main>


<?php require_once 'includes/footer.php';  ?>