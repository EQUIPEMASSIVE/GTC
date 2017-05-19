<?php
require "includes/header.php";




?>



<div class="content-wrapper">

	<div class="container">
		<div class="row">

			<div class="col-md-6">
				<div class="Compose-Message">
					<div class="panel panel-success">
						<div class="panel-heading">Publicar Notícia Rápida/Rascunho</div>
						<div class="panel-body">
							<form action="acoes/publicar-notaR.php" method="POST">
								<label>Titulo da Postagem: </label> <input type="text"
									class="form-control" name="titulo-postagem" required /> <label>Tags
									de Pesquisa: </label> <input type="text" class="form-control"
									name="tags-pesquisa" /> <label>Descrição da Notícia : </label>
								<textarea rows="9" class="form-control" name="descricao-nota"></textarea>
								<input class="btn btn-success" type="submit"
									name="publicar-nota" value="Publicar Nota" style="margin-top: 8px;"/>
							</form>
						</div>
						<div class="panel-footer text-muted">
							<strong>Note : </strong>Todas as postagem aqui feitas iram para
							rascunhos!
						</div>
					</div>
				</div>

			</div>
			<!--Fim col-->

			<div class="col-md-6">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h3>Atualização</h3>
					</div>
				
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover">
								<thead>
									<tr>
										<td>Notícias Publicadas</td>
										<td><?php
										$SQL = mysql_query ( "SELECT * FROM noticias WHERE status=1" );
										echo mysql_num_rows ( $SQL );
										?></td>

									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Categorias Ativas</td>
										<td><?php
										$SQL = mysql_query ( "SELECT * FROM categoria" );
										echo mysql_num_rows ( $SQL );
										?></td>
									</tr>

								</tbody>
							</table>
						</div>
					
				</div>
			</div>
			<!--fim col-->




		<!--NOVO CODIGO===============================================================================================================-->


		<?php 
			$itens_por_pagina = 6;

			// pegar a pagina atual
			@$pagina = intval($_GET['pagina']);
			// puxar produtos do banco
			$sql_code = "select titulo, dataPub, status from noticias where status='1' LIMIT $pagina, $itens_por_pagina";
			$execute = $mysqli->query($sql_code) or die($mysqli->error);
			$produto = $execute->fetch_assoc();
			$num = $execute->num_rows;

			// pega a quantidade total de objetos no banco de dados
			$num_total = $mysqli->query("select titulo, dataPub, status from noticias where status='1'")->num_rows;

			// definir numero de páginas
			$num_paginas = ceil($num_total/$itens_por_pagina);

		 ?>
		
		<div class="col-md-6">	
				<table  class="table table-striped table-bordered table-hover">
  				<h2>Últimas Notícias Postadas</h2>
  				<?php if($num > 0){ ?>
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<td><b><h3>Titulo</h3></b></td>
							<td><b>Data</b></td>
						</tr>
					</thead>
					<tbody>
						<?php do{ ?>
						<tr>
							<td><?php echo $produto['titulo']; ?></td>
							<td><?php echo $produto['dataPub']; ?></td>
						</tr>
						<?php } while($produto = $execute->fetch_assoc()); ?>
					</tbody>
				</table>

				<nav>
				  <ul class="pagination">
				    <li>
				      <a href="inicial.php?pagina=0" aria-label="Previous">
				        <span aria-hidden="true">&laquo;</span>
				      </a>
				    </li>
				    <?php 
				    for($i=0;$i<$num_paginas;$i++){
				    $estilo = "";
				    if($pagina == $i)
				    	$estilo = "class=\"active\"";
				    ?>
				    <li <?php echo $estilo; ?> ><a href="inicial.php?pagina=<?php echo $i; ?>"><?php echo $i+1; ?></a></li>
					<?php } ?>
				    <li>
				      <a href="inicial.php?pagina=<?php echo $num_paginas-1; ?>" aria-label="Next">
				        <span aria-hidden="true">&raquo;</span>
				      </a>
				    </li>
				  </ul>
				</nav>
  				<?php } ?>
  			</table>


  			<!---========================================================================================================================->		












		</div>
		<!--fim row-->
	</div>
</div>





<?php require "includes/footer.php"; ?>
