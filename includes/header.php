<?php require_once "configuration.php" ?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Portal de Noticias</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/default.css" media="screen">
	<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
</head>
<body>
  	<header>
  		<div id="topo">
  			
  			<div id="logo"> <a href="index.php"><img src="imagens/logo.png" alt="Portal de Noticias"/></a></div>
  			<div id="topo-right">
  				<p>Olá, Seja bem-vindo <a href="#"> Faça Login</a> ou <a href="#>Cadastre-se.</a></p>
  				<form action="buscar.php" method="GET">
  				<input type="text" name="busca-organica" id="busca-organica" required>	
  				</form>
  			</div>
  		</div>
  	</header>
  	<div id="menu">
  		<nav>
  			<ul id="menu-screen">
  				<li>Categorias do Site
  					<ul>
  						<?php  
                $SQL = mysql_query("SELECT * FROM categoria");
                  while ($lh = mysql_fetch_assoc($SQL)) {

              ?>
              <li><a href="categoria.php?id=<?php echo $lh['id_categoria']; ?>"><?php echo $lh['nome_categoria']; ?></a></li>
              <?php } ?>
  					</ul>
  				</li>
  					
  				<li>Publicidade</li>
  				<li>Quem Somos</li>
  				<li>Parceiros</li>
  				<li>Atendimento</li>
  			</ul>
  		</nav>
  	</div>
</body>
</html>