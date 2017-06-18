<?php
require_once "includes/configuration.php";
require_once "includes/header.php"?>
<div class="content-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<div class="panel panel-primary" style="border: 1px solid #333;">

					<div class="panel-heading" style="background-color: #333; border: 1px solid #333; color: white;">Alterar Perfil</div>
					<div class="panel-body">
                        <?php
																								
																								$admin_log = $_SESSION ["usuario"];
																								$admin_pas = $_SESSION ["senha"];
																								
																								$SQL_P = mysql_query ( "SELECT * FROM administradores WHERE usuario='$admin_log' AND senha = '$admin_pas' " );
																								
																								while ( $ln = mysql_fetch_assoc ( $SQL_P ) ) {
																									$id_adm = $ln ['id'];
																									$nm_adm = $ln ['nome'];
																									$em_adm = $ln ['email'];
																									$us_adm = $ln ['usuario'];
																									$im_adm = $ln ['imgPerfil'];
																								}
																								
																								?>
                            <form
							action="acoes/atualizar-perfil.php?id_adm=<?php echo $id_adm; ?>"
							method="POST" enctype="multipart/form-data">


							<img src="imagens/perfil/<?php echo $im_adm; ?>" width="520"
								height="400""> <br /> <label>Nome: </label> <label><?php echo $nm_adm; ?></label>

							<br /> <label>Email: </label> <br /> <input type="text"
								name="adm-email-up" value="<?php echo $em_adm; ?>" /> <br /> <label>Usuário:</label>
							<br /> <input type="text" name="adm-user-up"
								value="<?php echo $us_adm; ?>"> <br /> <label>Senha: </label> <br />
							<input type="password" name="adm-pass-up" maxlength="15"
								required="required"> <br /> <br /> <input type="text"
								id="imagem-noticia-carregar" placeholder="Selecione uma imagem"
								required="required" /> <input type="file"
								class="hidden-xs hidden-sm hidden-md hidden-lg"
								id="imagem-carregada" name="adm-imgPerfil-up" />



							<button type="submit" class="btn btn-default">
								<i class=" fa fa-refresh "></i> Atualizar
							</button>
						</form>
					</div>

				</div>
			</div>
			<div class="row">
				<div class="col-xs-6 col-md-4">
									
				</div>
			</div>
			<!--Fim div row-->
		</div>
		<!--Fim container-->
	</div></div>
	<!--div.content-wrapper--> 
<?php require "includes/footer.php"; ?> 
