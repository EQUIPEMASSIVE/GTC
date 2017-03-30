<?php require_once 'includes/header.php';  ?>

<main>
	
<section id="content">
	
	<section id="conteudo">
			
			<?php  

				$id_cat = $_GET["id"];
																	                                                    //Exibe a noticia em ordem descrecente por id da noticia
				$SQL_NC = mysql_query("SELECT id_noticia, titulo, conteudo, imagem FROM noticias WHERE categoria=$id_cat ORDER BY id_noticia DESC");
  

				if(mysql_num_rows($SQL_NC) != 0){

				while ($nc = mysql_fetch_array($SQL_NC)){

						$id_news        = $nc["id_noticia"];
						$titulo_news    = $nc["titulo"];
						$conteudo_news  = $nc["conteudo"];
						$imagem_news    = $nc["imagem"];
						

			?>

			<section id="categoria-news">
				<h1><a href="noticia.php?id=<?php echo $id_news;?>"><?php echo $titulo_news; ?></a></h1>
				<section id="imagem-noticia"><img src="cp/imagens/imgnoticia/<?php echo $imagem_news; ?>" alt="Titulo na Notícia" /></section>
				<p><?php 

				echo  substr($conteudo_news, 0, 512);


				?><a href="noticia.php?id=<?php echo $id_news; ?>">...Continue Lendo</a></p>
				</section>

				<?php } } else {?>

				<section id="categoria-news-error">
				<h1> Não há notícias para esta categoria! =( </h1>
				</section>

				
				<?php } ?>

			</section><!-- fim conteudo-->

				<section id="sidebar"><?php require_once 'includes/sidebar.php'; ?></section>

	</section>	<!--fim content-->

</section>

</main>


<?php require_once 'includes/footer.php'; ?>