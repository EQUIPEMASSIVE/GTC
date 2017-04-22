<?php 

require_once "includes/header.php";

?>

<script type="text/javascript" src="js/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({ 
		// General options
		mode : "textareas",
		theme : "advanced",
		height: "900",
		plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,visualblocks",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example content CSS (should be your site CSS)
		content_css : "css/content.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

		// Style formats
		style_formats : [
			{title : 'Bold text', inline : 'b'},
			{title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
			{title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
			{title : 'Example 1', inline : 'span', classes : 'example1'},
			{title : 'Example 2', inline : 'span', classes : 'example2'},
			{title : 'Table styles'},
			{title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
		],

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
</script>

	<main>
		<section id="wrapper">
			
			<section id="content">
			
			<section id="submenu">

					<?php


					$SQL_RS = mysql_query("SELECT status FROM noticias WHERE status=0");
					$SQL_TN = mysql_query("SELECT status FROM noticias WHERE status=1");
					$SQL_LX = mysql_query("SELECT status FROM noticias WHERE status=2");

					$CNT_RS = mysql_num_rows($SQL_RS);
					$CNT_TN = mysql_num_rows($SQL_TN);   
					$CNT_LX = mysql_num_rows($SQL_LX);

					?>

				<ul>
					<li id="publicar-noticia-menu" class="activeColor">Compor Texto</li>
					<li id="todas-noticias-menu">Ver todas as notícias <?php if($CNT_TN != 0): echo "($CNT_TN)"; endif; ?></li>
					<li id="rascunhos-menu">Rascunhos <?php if($CNT_RS != 0): echo "($CNT_RS)"; endif; ?></li>
					<li id="lixeira-menu">Lixeira<?php if($CNT_LX != 0): echo "($CNT_LX)"; endif; ?></li>
				</ul>
			</section>
			
			<section id="publicar-noticia">
					
				
					<?php
					if(!isset($_GET["id_nt_ed"])) {
						
					 

				?>
				<form action="acoes/publicar-noticia.php" method="POST" enctype="multipart/form-data">

				<section id="publicar-noticia-left">

				
					<table>
					<tbody>
						<tr>
							<td><input type="text" name="titulo-noticia" placeholder="Coloque o título aqui" /></td>
						</tr>
						<tr>
							<td><textarea name="conteudo-noticia" id="maxW"></textarea></td>
						</tr>
					</tbody>	
				</table>		
				</section>
					<section id="publicar-noticia-right">
				    <!--Primeira tabela-->
                      <div class="col-md-12 col-sm-4">
                    	<div class="panel panel-primary">
                        <div class="panel-heading">
                            <button type="submit" class="btn btn-success">Publicar Notícia</button>
                        </div>
                            <div class="panel-body">
                                <p>Data Publicação: <?php echo date("d/m/Y"); ?></p>
                                <p>Autor: <?php echo $nomeUser; ?></p>
                            </div>
                    	</div>
                	</div>
                    <!--Fim primeira tabela-->
                    
					  
                      
                      
						
                        <!--Segunda Tabela-->
                       	<div class="col-md-12 col-sm-4">
                    	<div class="panel panel-primary">
                        <div class="panel-heading">
                            <label class="control-label" for="success">Tags de Pesquisa</label>
                        </div>
                            <div class="panel-body">
                                <p><input type="text" name="publicar" placeholder="Tag de pesquisa" required /></p>
                                
                            </div>
                    	</div>
                	</div>
                    	<!--Fim segunda Tabela-->
                        
							
                        
                        <!--Terceira tabela-->
                        <div class="col-md-12 col-sm-4">
                    	<div class="panel panel-primary">
                        <div class="panel-heading">
                            <label class="control-label" for="success">Imagem da Notícia</label>
                        </div>
                            <div class="panel-body">
                                <input type="text" id="imagem-noticia-carregar" placeholder="Selecione Imagem" required />
								<input type="file" hidden id="imagem-carregada" name="imagem-noticia" />
                                
                            </div>
                    	</div>
                	</div>
						<!--Fim terceira tabela-->
						
						
                        <!--quarta tabela-->
                        <div class="col-md-12 col-sm-4">
                    	<div class="panel panel-primary">
                        <div class="panel-heading">
                            <label class="control-label" for="success">Categoria da Notícia</label>
                        </div>
                            <div class="panel-body">
                                
                                <select name="categoria-noticia" required="">
												<option	selected="selected" value="">Selecione uma Categoria</option>
												<?php

													$SQL_C = mysql_query("SELECT * FROM categoria");

													while($ct = mysql_fetch_array($SQL_C)){

												?>
												<option value="<?php echo $ct['id_categoria']; ?>"> <?php echo $ct['nome_categoria']; ?></option>
												<?php } ?>
												


												
          									 </select>
                                
                            </div>
                    	</div>
                	</div>
                    
                    
						<!--Fim quarta tabela-->
                        
					</section>
					</form>
					<!--fim das CHAVES if(!isset($_GET["id_nt_ed"])) -->
					<?php } else{ 


						$id_nt_ed = $_GET["id_nt_ed"];	
						$SQL_SL = mysql_query("SELECT * FROM noticias WHERE id_noticia=$id_nt_ed");
						while ($lh = mysql_fetch_array($SQL_SL)) {
							$id_nt         = $lh["id_noticia"];
							$titulo_ntE    = $lh["titulo"];
							$conteudo_ntE  = $lh["conteudo"];
							//A TABELA (DATA) ESTA NOMEADA NO )BANCO) ASSIM --->('datapub') e a nova variavel é 'dataPub'. isso confundi!!
							$dataPub_ntE   = $lh["datapub"];   
							$autorPub_ntE  = $lh["autorPub"];
							$tagSear_ntE   = $lh["tags"];
							$imagem_ntE    = $lh["imagem"];

						}

					?>
                    
                    
                    
						<!-- INICIO DO CODIGO DUPLICADO  EDITAR NOTICIAS-->
						<form action="acoes/atualizar-noticia.php?id_nt_up=<?php echo $id_nt; ?>" method="POST" enctype="multipart/form-data">

				<section id="publicar-noticia-left">

				
					<table>
					<tbody>
						<tr>
							<td><input type="text" name="titulo-noticia" value="<?php echo $titulo_ntE;  ?>" /></td>
						</tr>
						<tr>
							<td><textarea name="conteudo-noticia" id="maxW" ><?php echo $conteudo_ntE; ?></textarea></td>
						</tr>
					</tbody>	
				</table>		
				</section>
					<section id="publicar-noticia-right">
				    <!--Primeira tabela-->
                      <div class="col-md-12 col-sm-5">
                    	<div class="panel panel-primary">
                        <div class="panel-heading">
                            <button type="submit" class="btn btn-success" name="publicar">Publicar Notícia</button>
                            <button type="submit" class="btn btn-success" name="salvar-rascunho">Salvar </button>
                        </div>
                            <div class="panel-body">
                                <p>Data Publicação:<?php echo $dataPub_ntE; ?></p>
                                <p>Autor: <?php echo $autorPub_ntE; ?></p>
                            </div>
                    	</div>
                	</div>
                    <!--Fim primeira tabela-->
                    
					  
                      
                      
						
                        <!--Segunda Tabela-->
                       	<div class="col-md-12 col-sm-4">
                    	<div class="panel panel-primary">
                        <div class="panel-heading">
                            <label class="control-label" for="success">Tags de Pesquisa</label>
                        </div>
                            <div class="panel-body">
                                <p><input type="text" name="tags-pesquisa" value="<?php echo $tagSear_ntE; ?>" required="" /></td></p>
                                
                            </div>
                    	</div>
                	</div>
                    	<!--Fim segunda Tabela-->
                        
							
                        
                        <!--Terceira tabela-->
                        <div class="col-md-12 col-sm-4">
                    	<div class="panel panel-primary">
                        <div class="panel-heading">
                            <label class="control-label" for="success">Imagem da Notícia</label>
                        </div>
                            <div class="panel-body">
                                <input type="text" id="imagem-noticia-carregar" placeholder="Selecione Imagem"value="<?php echo $imagem_ntE ?>" required />
								<input type="file" hidden id="imagem-carregada" name="imagem-noticia" />
                                
                            </div>
                    	</div>
                	</div>
						<!--Fim terceira tabela-->
						
						
                        <!--quarta tabela-->
                        <div class="col-md-12 col-sm-4">
                    	<div class="panel panel-primary">
                        <div class="panel-heading">
                            <label class="control-label" for="success">Categoria da Notícia</label>
                        </div>
                            <div class="panel-body">
                                
                                <select name="categoria-noticia" required="">
												<option	selected="selected" value="">Selecione uma Categoria</option>
												<?php

													$SQL_C = mysql_query("SELECT * FROM categoria");

													while($ct = mysql_fetch_array($SQL_C)){

												?>
												<option value="<?php echo $ct['id_categoria']; ?>"> <?php echo $ct['nome_categoria']; ?></option>
												<?php } ?>
												


												
          									 </select>
                                
                            </div>
                    	</div>
                	</div>
                    
                    
						<!--Fim quarta tabela-->
                        
					</section>
					</form>
					<?php } ?>
				<!--fim do segundo form-->
				
			</section><!-- Publicar noticia-->
            
			<section id="todas-as-noticias">
				
				<table callpadding="0" callspacing="0">
					<tbody>
						<tr>
							<td>Titulo da Notícia</td>
							<td>Autor</td>
							<td>Categoria</td>
							<td>Tags</td>
							<td>Data</td>
							<td>Editar</td>
							<td>Excluir</td>
						</tr>
						<?php
							$SQL_TDN = mysql_query("SELECT id_noticia, titulo, datapub, autorPub, tags, nome_categoria FROM noticias INNER JOIN categoria ON(noticias.categoria = categoria.id_categoria) WHERE status=1") or die(mysql_error());

							while($TND = mysql_fetch_array($SQL_TDN)){	

						?>
						<tr>
							<td><?php echo $TND['titulo']; ?></td>
							<td><?php echo $TND['autorPub']; ?></td>
							<td><?php echo $TND['nome_categoria']; ?></td>
							<td><?php echo $TND['tags']; ?></td>
							<td><?php 

							$dataExb = explode("-", $TND['datapub']);

							echo $dataExb[2]."/".$dataExb[1]."/".$dataExb[0]; 


							?></td>
							<td><a href="gerenciar-noticia.php?id_nt_ed=<?php echo $TND["id_noticia"]; ?>">Editar</a></td>
							<td><a href="acoes/lixeira.php?idN=<?php echo $TND["id_noticia"]; ?>">Excluir</a></td>
						</tr>
						<?php } ?>

					</tbody>
					
				</table> 
			</section> <!--section todas as noticias-->


			<section id="noticias-rascunhos">
				
				<table callpadding="0" callspacing="0">
					<tbody>
						<tr>
							<td>Titulo da Notícia</td>
							<td>Autor</td>
							<td>Categoria</td>
							<td>Tags</td>
							<td>Data</td>
							<td>Excluir</td>
						</tr>
						<?php
							$SQL_TDN = mysql_query("SELECT id_noticia, titulo, datapub, autorPub, tags, nome_categoria FROM noticias INNER JOIN categoria ON(noticias.categoria = categoria.id_categoria) WHERE status=0") or die(mysql_error());

							while($TND = mysql_fetch_array($SQL_TDN)){	
									$id_nt_ed = $TND["id_noticia"];
						?>
						<tr>
							<td><?php echo $TND['titulo']; ?></td>
							<td><?php echo $TND['autorPub']; ?></td>
							<td><?php echo $TND['nome_categoria']; ?></td>
							<td><?php echo $TND['tags']; ?></td>
							<td><?php 

							$dataExb = explode("-", $TND['datapub']);

							echo $dataExb[2]."/".$dataExb[1]."/".$dataExb[0]; 


							?></td>
							<td><a href="gerenciar-noticia.php?id_nt_ed=<?php echo $id_nt_ed; ?>">Editar</a></td>
						</tr>
						<?php } ?>

					</tbody>
					
				</table> 
			</section> <!--section rascunhos-->	


			<section id="noticias-lixeira">
				
				<table callpadding="0" callspacing="0">
					<tbody>
						<tr>
							<td>Titulo da Notícia</td>
							<td>Autor</td>
							<td>Categoria</td>
							<td>Tags</td>
							<td>Data</td>
							<td>Excluir</td>
						</tr>
						<?php
							$SQL_TDN = mysql_query("SELECT id_noticia, titulo, datapub, autorPub, tags, nome_categoria FROM noticias INNER JOIN categoria ON(noticias.categoria = categoria.id_categoria) WHERE status=2") or die(mysql_error());

							while($TND = mysql_fetch_array($SQL_TDN)){	

						?>
						<tr>
							<td><?php echo $TND['titulo']; ?></td>
							<td><?php echo $TND['autorPub']; ?></td>
							<td><?php echo $TND['nome_categoria']; ?></td>
							<td><?php echo $TND['tags']; ?></td>
							<td><?php 

							$dataExb = explode("-", $TND['datapub']);

							echo $dataExb[2]."/".$dataExb[1]."/".$dataExb[0]; 


							?></td>
							<td><a href="acoes/excluir-noticia.php?idNX=<?php echo $TND["id_noticia"]; ?>">Excluir</a></td>
						</tr>
						<?php } ?>

					</tbody>
					
				</table> 
			</section> <!--section lixeira-->	
			
			</section> <!-- Content -->
				
		</section> <!-- Wrapper -->
		
	</main>
<?php require "includes/footer.php"; ?>
