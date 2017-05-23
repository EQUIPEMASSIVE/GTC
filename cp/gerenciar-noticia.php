<?php
require_once "includes/header.php";

?>

<main>
<div class="container">
<!-- 	<div id="submenu"> -->
<div class="table-responsive" id="menu-top">
					<?php
					
					$SQL_RS = mysql_query ( "SELECT status FROM noticias WHERE status=0" );
					$SQL_TN = mysql_query ( "SELECT status FROM noticias WHERE status=1" );
					$SQL_LX = mysql_query ( "SELECT status FROM noticias WHERE status=2" );
					
					$CNT_RS = mysql_num_rows ( $SQL_RS );
					$CNT_TN = mysql_num_rows ( $SQL_TN );
					$CNT_LX = mysql_num_rows ( $SQL_LX );
					
					?>
<br>					
<table>
		<tr >
			<td>
			<button style="border-radius: 4px;margin-right: 10px;margin-bottom: 5px;" type="submit" id="publicar-noticia-menu" class="btn btn-primary" >Compor Texto</button>
			<button style="border-radius: 4px;margin-right: 10px;margin-bottom: 5px;background-color: #0099cc;color: white;" type="submit" id="todas-noticias-menu" class="btn">Ver todas as notícias <?php if($CNT_TN != 0): echo "($CNT_TN)"; endif; ?></button>
			<button style="border-radius: 4px;margin-right: 10px;margin-bottom: 5px;background-color: #33b5e5;color: white;" type="submit" id="rascunhos-menu" class="btn" >Rascunhos <?php if($CNT_RS != 0): echo "($CNT_RS)"; endif; ?></button>
			<button style="border-radius: 4px;margin-right: 10px;margin-bottom: 5px;" type="submit" id="lixeira-menu" class="btn btn-danger" >Lixeira<?php if($CNT_LX != 0): echo "($CNT_LX)"; endif; ?></button>
			</td>	
		</tr>
</table>
<br>
	</div>
	<div class="row">

		<div id="publicar-noticia">			
				
					<?php
					if (! isset ( $_GET ["id_nt_ed"] )) {
						
						?>
				<form action="acoes/publicar-noticia.php" method="POST"
				enctype="multipart/form-data">

				<!-- SIDBAR RIGTH -->
				<div class="col-md-8">

					<div class="grid-container" id="publicar-noticia-left">
						<div class="grid-width-100">
							<input maxlength="58" class="form-control" type="text" name="titulo-noticia"
								placeholder="Coloque o título aqui"/>
								<br>	
							<div >
								<textarea name="conteudo-noticia" id="editor1"></textarea>
							</div>
						</div>
					</div>

				</div>
				<!-- FIM SIDBAR RIGTH -->

					<br>

				<!-- SIDBAR LEFT -->
				<div class="col-md-4">
					<!-- Div Publicar -->
					<div class="panel panel-primary">
						<div class="panel-heading">
							<input type="submit" class="btn btn-info" value="Publicar Notícia" />
						</div>
						<div class="panel-body">
							<p>
								<strong>Data Publicação:</strong> <?php echo date("d/m/Y"); ?></p>
							<p>
								<strong>Autor:</strong> <?php echo $nomeUser; ?></p>
						</div>
					</div>

					<!-- Div  Tags-->
					<div class="panel panel-primary">
						<div class="panel-heading">
							<label class="control-label" for="success">Tags de Pesquisa</label>
						</div>
						<div class="panel-body">
							<p>
								<input class="form-control" type="text" name="tags-pesquisa"
									placeholder="Tag de pesquisa" required="required"/>
							</p>

						</div>
					</div>

					<!-- Div Imagem -->
					<div class="panel panel-primary">
						<div class="panel-heading">
							<label class="control-label" for="success">Imagem da Notícia</label>
						</div>
						<div class="panel-body">
							<input class="form-control" type="text" id="imagem-noticia-carregar"
								placeholder="Selecione Imagem" required="required"/> <input type="file"
								class="hidden-xs hidden-sm hidden-md hidden-lg"
								id="imagem-carregada" name="imagem-noticia" />

						</div>
					</div>


					<!-- Div Categoria -->
					<div class="panel panel-primary">
						<div class="panel-heading">
							<label class="control-label" for="success">Categoria da Notícia</label>
						</div>
						<div class="panel-body">

							<select  class="btn btn-default dropdown-toggle" name="categoria-noticia" required="required">
								<option selected="selected" value="">Selecione uma Categoria</option>
												<?php
						
						$SQL_C = mysql_query ( "SELECT * FROM categoria" );
						
						while ( $ct = mysql_fetch_array ( $SQL_C ) ) {
							
							?>
								<option value="<?php echo $ct['id_categoria']; ?>"> <?php echo $ct['nome_categoria']; ?></option>
								<?php } ?>
												
          					 </select>

						</div>
					</div><!--class="panel panel-primary"-->
				</div>

				<!-- FIM SIDBAR LEFT -->
			</form>
			<!--fim das CHAVES if(!isset($_GET["id_nt_ed"])) -->
					<?php
					} else {
						
						$id_nt_ed = $_GET ["id_nt_ed"];
						$SQL_SL = mysql_query ( "SELECT * FROM noticias WHERE id_noticia=$id_nt_ed" );
						while ( $lh = mysql_fetch_array ( $SQL_SL ) ) {
							$id_nt = $lh ["id_noticia"];
							$titulo_ntE = $lh ["titulo"];
							$conteudo_ntE = $lh ["conteudo"];
							// A TABELA (DATA) ESTA NOMEADA NO )BANCO) ASSIM --->('datapub') e a nova variavel é 'dataPub'. isso confundi!!
							$dataPub_ntE = $lh ["datapub"];
							$autorPub_ntE = $lh ["autorPub"];
							$tagSear_ntE = $lh ["tags"];
							$imagem_ntE = $lh ["imagem"];
						}
						
						?>
                    
                    
                    
						<!-- INICIO DO CODIGO DUPLICADO  EDITAR NOTICIAS-->

			<form
				action="acoes/atualizar-noticia.php?id_nt_up=<?php echo $id_nt; ?>"
				method="POST" enctype="multipart/form-data">
				<div class="col-md-6">

					<div class="grid-container" id="publicar-noticia-left">
						<div class="grid-width-100">
							<input class="form-control" type="text" name="titulo-noticia"
								placeholder="Coloque o título aqui"
								value="<?php echo $titulo_ntE;  ?>"/>
								<br>
							<div >
								<textarea name="conteudo-noticia" id="editor1"><?php echo $conteudo_ntE; ?></textarea>
							</div>
						
						</div>
					</div>

				</div>
				<!-- FIM SIDBAR RIGTH -->
				<br>

				<!-- SIDBAR LEFT -->
				<div class="col-md-6">
					<!-- Div Publicar -->
					<div class="panel panel-primary">
						<div class="panel-heading">
							<input type="submit" class="btn btn-info btn-rigth" value="Publicar Notícia" />
							<input type="submit" class="btn btn-warning" name="salvar-rascunho" value="Salvar Notícia"/>
						</div>
						<div class="panel-body">
							<p>
								<strong>Data Publicação:</strong> <?php echo $dataPub_ntE; ?></p>
							<p>
								<strong>Autor:</strong> <?php echo $autorPub_ntE; ?>
						
						</div>
					</div>

					<!-- Div  Tags-->
					<div class="panel panel-primary">
						<div class="panel-heading">
							<label class="control-label" for="success">Tags de Pesquisa</label>
						</div>
						<div class="panel-body">
							<p>
								<input class="form-control" type="text" name="tags-pesquisa"
									placeholder="Tag de pesquisa" required="required"
									value="<?php echo $tagSear_ntE; ?>"/>
							</p>

						</div>
					</div>

					<!-- Div Imagem -->
					<div class="panel panel-primary">
						<div class="panel-heading">
							<label class="control-label" for="success">Imagem da Notícia</label>
						</div>
						<div class="panel-body">
							<input class="form-control" type="text" id="imagem-noticia-carregar"
								placeholder="Selecione Imagem" required="required"
								value="<?php echo $imagem_ntE ?>"/> <input
								type="file" class="hidden-xs hidden-sm hidden-md hidden-lg"
								id="imagem-carregada" name="imagem-noticia" />

						</div>
					</div>

					<!-- Div Categoria -->
					<div class="panel panel-primary">
						<div class="panel-heading">
							<label class="control-label" for="success">Categoria da Notícia</label>
						</div>
						<div class="panel-body">

							<select class="btn btn-default dropdown-toggle" name="categoria-noticia" required="required">
								<option selected="selected" value="">Selecione uma Categoria</option>
												<?php
						
						$SQL_C = mysql_query ( "SELECT * FROM categoria" );
						
						while ( $ct = mysql_fetch_array ( $SQL_C ) ) {
							
							?>
									<option value="<?php echo $ct['id_categoria']; ?>"> <?php echo $ct['nome_categoria']; ?></option>
									<?php } ?>
												
          					</select>

						</div>
					</div>
				</div>

				<!-- FIM SIDBAR LEFT -->
			</form>
					<?php } ?>
				<!--fim do segundo form-->
		</div>

		<!-- Todas as Noticias -->
		<div id="todas-as-noticias" >
			<div id="container" >
				<div class="table-responsive">

					<table class="table table-bordered table-hover">
						<tbody>
							<tr  style="font-weight: bold;background-color: rgba(0, 153, 204, 0.68);">
								<td>Titulo da Notícia</td>
								<td>Autor</td>
								<td>Categoria</td>
								<td>Tags</td>
								<td>Data</td>
								<td>Editar</td>
								<td>Excluir</td>
							</tr>
						<?php
						$SQL_TDN = mysql_query ( "SELECT id_noticia, titulo, datapub, autorPub, tags, nome_categoria FROM noticias INNER JOIN categoria ON(noticias.categoria = categoria.id_categoria) WHERE status=1" ) or die ( mysql_error () );
						
						while ( $TND = mysql_fetch_array ( $SQL_TDN ) ) {
							
							?>
						<tr>
								<td><?php echo $TND['titulo']; ?></td>
								<td><?php echo $TND['autorPub']; ?></td>
								<td><?php echo $TND['nome_categoria']; ?></td>
								<td><?php echo $TND['tags']; ?></td>
								<td><?php
							
							$dataExb = explode ( "-", $TND ['datapub'] );
							
							echo $dataExb [2] . "/" . $dataExb [1] . "/" . $dataExb [0];
							
							?></td>
								<td><a
									href="gerenciar-noticia.php?id_nt_ed=<?php echo $TND["id_noticia"]; ?>">Editar</a></td>
								<td><a
									href="acoes/lixeira.php?idN=<?php echo $TND["id_noticia"]; ?>">Excluir</a></td>
							</tr>
						<?php } ?>

					</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- fim todas as noticias -->

		<!-- inicio rascunho -->
		<div id="noticias-rascunhos">
			<div id="container">
				<div class="table-responsive">

					<table class="table table-bordered table-hover">
						<tbody>
							<tr style="font-weight: bold;background-color: rgba(51, 181, 229, 0.32);">
								<td>Titulo da Notícia</td>
								<td>Autor</td>
								<td>Categoria</td>
								<td>Tags</td>
								<td>Data</td>
								<td>Editar</td>

							</tr>
						<?php
						$SQL_TDN = mysql_query ( "SELECT id_noticia, titulo, datapub, autorPub, tags, nome_categoria FROM noticias INNER JOIN categoria ON(noticias.categoria = categoria.id_categoria) WHERE status=0" ) or die ( mysql_error () );
						
						while ( $TND = mysql_fetch_array ( $SQL_TDN ) ) {
							$id_nt_ed = $TND ["id_noticia"];
							?>
						<tr>
								<td><?php echo $TND['titulo']; ?></td>
								<td><?php echo $TND['autorPub']; ?></td>
								<td><?php echo $TND['nome_categoria']; ?></td>
								<td><?php echo $TND['tags']; ?></td>
								<td><?php
							
							$dataExb = explode ( "-", $TND ['datapub'] );
							
							echo $dataExb [2] . "/" . $dataExb [1] . "/" . $dataExb [0];
							
							?></td>
								<td><a
									href="gerenciar-noticia.php?id_nt_ed=<?php echo $id_nt_ed; ?>">Editar</a></td>
							</tr>
						<?php } ?>

					</tbody>

					</table>
				</div>
			</div>
		</div>
		<!-- fim rascunho -->

		<!-- inicio lixeira -->
		<div id="noticias-lixeira">
			<div id="container">
				<div class="table-responsive">

					<table class="table table-bordered table-hover">
						<tbody>
							<tr style="font-weight: bold;background-color: rgba(242, 69, 61, 0.77);">
								<td>Titulo da Notícia</td>
								<td>Autor</td>
								<td>Categoria</td>
								<td>Tags</td>
								<td>Data</td>
								<td>Editar</td>

							</tr>
						<?php
						$SQL_TDN = mysql_query ( "SELECT id_noticia, titulo, datapub, autorPub, tags, nome_categoria FROM noticias INNER JOIN categoria ON(noticias.categoria = categoria.id_categoria) WHERE status=2" ) or die ( mysql_error () );
						
						while ( $TND = mysql_fetch_array ( $SQL_TDN ) ) {
							
							?>
						<tr>
								<td><?php echo $TND['titulo']; ?></td>
								<td><?php echo $TND['autorPub']; ?></td>
								<td><?php echo $TND['nome_categoria']; ?></td>
								<td><?php echo $TND['tags']; ?></td>
								<td><?php
							
							$dataExb = explode ( "-", $TND ['datapub'] );
							
							echo $dataExb [2] . "/" . $dataExb [1] . "/" . $dataExb [0];
							
							?></td>
								<td><a
									href="acoes/excluir-noticia.php?idNX=<?php echo $TND["id_noticia"]; ?>">Excluir</a></td>
							</tr>
						<?php } ?>
					</tbody>
					</table>
				</div>
			</div>

		</div>
		<!-- fim lixeira -->

	</div>
</div>
<!-- container --> <script>

    CKEDITOR.replace( 'editor1');

</script> <!-- Wrapper --> </main>

<?php require "includes/footer.php"; ?>
