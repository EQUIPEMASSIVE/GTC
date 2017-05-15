<?php require_once 'includes/header.php';  ?>

<br><br>
	<main>
				<div class="container">
		

					<br>
					<h1 class="jumbotron">Resultados da busca para:   <?php echo @$termo = $_GET["busca-organica"]; ?></h1> 
					

						
						
						
						<?php
						@$termo = $_GET["busca-organica"];
					    //A qunatidade de noticias a ser exibida a ser exibida
					    $quantidade = 3;//Altere a quantidade 
					    //a pagina atual
					    $pagina     = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
					    //Calcula a pagina de qual valor será exibido
					    $inicio     = ($quantidade * $pagina) - $quantidade;

					    //Monta o SQL com LIMIT para exibição dos dados  
					
					    //Executa o SQL
					    $busca = mysql_query("SELECT * FROM noticias  WHERE titulo LIKE '%$termo%' OR tags LIKE '%$termo%' ORDER BY  dataPub, status='1' DESC LIMIT $inicio, $quantidade") or die(mysqli_error());
					    
							if(mysql_num_rows($busca) !=0 ) {
								while ($src = mysql_fetch_array($busca)) {

						?>
						

						

				<div class="row-fluid">
				        <div class="col-md-13">


				            <!--Card Content-->
				            <div class="jumbotron">
				                <!--Title-->
				                <h1><a class="h1-responsive" href="href="noticia.php?id=<?php echo $src['id_noticia']; ?>"><?php echo $src['titulo']; ?></a></h1>
				                <p>Por: <?php echo $src['autorPub']; ?></p>

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

    					<?php } } else {  ?>
						<section id="buscar">
						<h2 class="title">A busca não retornou resuldado! =( </h2>

						</section>
						<?php } ?>


			</div>

	</main>

<!--´CÓDIGO DE PAGINAÇÃO------------------------------------------------------------------------------------------------------------------------------>

<?php
  /**
   * SEGUNDA PARTE DA PAGINAÇÃO
   */
  //SQL para saber o total
  $sqlTotal   = "SELECT id_noticia FROM noticias";
  //Executa o SQL
  $qrTotal    = mysql_query($sqlTotal) or die(mysql_error());
  //Total de Registro na tabela
  $numTotal   = mysql_num_rows($qrTotal);
  //O calculo do Total de página ser exibido
  $totalPagina= ceil($numTotal/$quantidade);
   /**
    * Defini o valor máximo a ser exibida na página tanto para direita quando para esquerda
    */
   $exibir = 10;
   /**
    * Aqui montará o link que voltará uma pagina
    * Caso o valor seja zero, por padrão ficará o valor 1
    */
   $anterior  = (($pagina - 1) == 0) ? 1 : $pagina - 1;
   /**
    * Aqui montará o link que ir para proxima pagina
    * Caso pagina +1 for maior ou igual ao total, ele terá o valor do total
    * caso contrario, ele pegar o valor da página + 1
    */
   $posterior = (($pagina+1) >= $totalPagina) ? $totalPagina : $pagina+1;
   /**
    * Agora monta o Link paar Primeira Página
    * Depois O link para voltar uma página
    */
  /**
    * Agora monta o Link para Próxima Página
    * Depois O link para Última Página
    */
    ?>

    <div id="navegacao">
        <?php
        echo '<a href="?pagina=1">primeira</a> | ';
        echo "<a href=\"?pagina=$anterior\">anterior</a> | ";
    ?>
        <?php
         /**
    * O loop para exibir os valores à esquerda
    */
   for($i = $pagina-$exibir; $i <= $pagina-1; $i++){
       if($i > 0)
        echo '<a href="?pagina='.$i.'"> '.$i.' </a>';
  }

  echo '<a href="?pagina='.$pagina.'"><strong>'.$pagina.'</strong></a>';

  for($i = $pagina+1; $i < $pagina+$exibir; $i++){
       if($i <= $totalPagina)
        echo '<a href="?pagina='.$i.'"> '.$i.' </a>';
  }

   /**
    * Depois o link da página atual
    */
   /**
    * O loop para exibir os valores à direita
    */

    ?>
    <?php echo " | <a href=\"?pagina=$posterior\">próxima</a> | ";
    echo "  <a href=\"?pagina=$totalPagina\">última</a>";
    ?>
    </div>
   
<?php require_once 'includes/footer.php';  ?>
