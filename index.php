<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>31-mar-hora22-09 Deploy ZETA</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/default.css" media="screen"/>
	<link rel="stylesheet" type="text/css" href="css/screen.css" media="screen"/>
	<script type="text/javascript" src="js/jquery-1.2.3.js"></script>
	<script type="text/javascript" src="js/easySlider1.7.js"></script>
</head>
	<script type="text/javascript">



		( function($) {
    // we can now rely on $ within the safety of our “bodyguard” function
    $(document).ready( function() {
            $("#slider").easySlider({
                auto: true,
                continuous: true
            });
         } );
} ) ( jQuery );




	</script>
<body>


<?php
 require_once 'includes/header.php';
?>
	<main>


		<section id="content">


			<section id="conteudo">

				<section id=slider class="banner">
					<ul>
						<?php                                                       //Na ordem do recente para o ultimo
							$SQL_B = mysql_query("SELECT id_noticia, imagem FROM noticias ORDER BY id_noticia DESC LIMIT 5");

							while ($bn = mysql_fetch_array($SQL_B)) {
							
						?>
						<li><a href="noticia.php?id=<?php echo $bn['id_noticia']; ?>"><img src="cp/imagens/imgnoticia/<?php echo $bn['imagem']; ?>" alt="Postagem 1"/></a></li>
						<?php } ?>
						</ul>
				</section><!--Banner-->

				<section id="artigos">
					<!--Categoria 1_____________________________CATEGORIA DIVERSOS______D, dv, dvn___________________________________________-->				
					<?php
                                        //Para escolher uma categoria para ser exibida no index principal é só trocar o nome_categoria pela catregoria da sua escolha
					$SQL_F = mysql_query("SELECT * FROM categoria WHERE nome_categoria='Diversos'");

					while ($ft = mysql_fetch_array($SQL_F)){
						$id_ft = $ft['id_categoria'];
					}

					$SQL_FN = mysql_query("SELECT * FROM noticias  WHERE categoria='$id_ft' ORDER BY id_noticia DESC LIMIT 3");

					while ($ftn = mysql_fetch_array($SQL_FN)) {
						
					?>

					<article>
					<h1><a href="categoria.php?id=<?php echo $id_ft; ?>">Diversos</a></h1>
					<a href="noticia.php?id=<?php echo $ftn['id_noticia']; ?>"><img src="cp/imagens/imgnoticia/<?php echo $ftn['imagem']; ?>" alt="<?php echo $ftn['titulo']; ?>"></a>
					<h2><a href="noticia.php?id=<?php echo $ftn['id_noticia']; ?>"><?php echo $ftn['titulo']; ?></a></h2>
					</article>


					<?php } ?>
					
					<!--Categoria 2_________________________________CATEGORIA TECNOLOGIA___T, tc, tcn_______________________________________-->
					<?php
                                        //Para escolher uma categoria para ser exibida no index principal é só trocar o nome_categoria pela catregoria da sua escolha
					$SQL_T = mysql_query("SELECT * FROM categoria WHERE nome_categoria='Tecnologia'");

					while ($tc = mysql_fetch_array($SQL_T)){
						$id_tc = $tc['id_categoria'];
					}

						

					$SQL_TC = mysql_query("SELECT * FROM noticias  WHERE categoria='$id_tc' ORDER BY id_noticia DESC LIMIT 3");

					while ($tcn = mysql_fetch_array($SQL_TC)) {
						
					?>

					<article>
					<h1><a href="categoria.php?id=<?php echo $id_tc; ?>">Tecnologia</a></h1>
					<a href="noticia.php?id=<?php echo $tcn['id_noticia']; ?>"><img src="cp/imagens/imgnoticia/<?php echo $tcn['imagem']; ?>" alt="<?php echo $tcn['titulo']; ?>"></a>
					<h2><a href="noticia.php?id=<?php echo $tcn['id_noticia']; ?>"><?php echo $tcn['titulo']; ?></a></h2>
					</article>


					<?php } ?>


				</section> <!--Artigos-->
				<section id="publicidade-conteudo"></section> <!--Publicidade conteudo-->
				

			</section> <!--conteudo-->

			<section id="sidebar"><?php require_once 'includes/sidebar.php'; ?></section> <!--sidebar--> 

		</section> <!--content-->

	</main>

	<?php require_once 'includes/footer.php'; ?>
