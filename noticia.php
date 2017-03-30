  <?php require_once 'includes/header.php';  ?>

<main>
	
	<section id="content">
		
		<section id="conteudo">

				<?php

					@$id_rn = $_GET["id"];
					$SQL_RN = mysql_query("SELECT * FROM noticias INNER JOIN categoria ON (noticias.categoria = categoria.id_categoria) WHERE id_noticia='$id_rn'");

						while ($rn = mysql_fetch_array($SQL_RN)) {
							$data = explode("-", $rn["datapub"]);
							$dataEX = $data[2]."/".$data[1]."/".$data[0];
						

				?>


				<section id="info-noticias">
				<h1><?php echo $rn["titulo"]; ?></h1>
				<p>Data Publicação: <?php echo $dataEX; ?> Autor: <?php echo $rn["autorPub"]; ?> Categoria: <?php echo $rn["nome_categoria"]; ?></p>	
				</section>


				<section id="banner-noticia"><img src="cp/imagens/imgnoticia/<?php echo $rn["imagem"];?>" alt="<?php echo $rn["titulo"];?>"></section>

				<section id="conteudo-noticia"><?php echo $rn["conteudo"]; ?></section>

				<section id="tags"><strong>Tags:</strong> <?php echo $rn["tags"];?></section>

				<?php } ?>

				<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_PT/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-comments" data-href="http://www.guiatecnologico.16mb.com/" data-width="500" data-numposts="5"></div>

		</section> <!--fim conteudo-->

				<section id="sidebar"><?php require_once 'includes/sidebar.php'; ?></section>

	</section> <!-- fim content-->

</main>

<?php require_once 'includes/footer.php'; ?>