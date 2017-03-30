<?php
 require_once "includes/configuration.php";
 require_once "includes/header.php"
?>
		<main>
			<section id="wrapper">
					
					<section id="content">
							<section id="alterar-perfil">
								<h1>Alterar Perfil</h1>
								<?php 

									$admin_log = $_SESSION["usuario"];
									$admin_pas = $_SESSION["senha"];

									$SQL_P = mysql_query("SELECT * FROM administradores WHERE usuario='$admin_log' AND senha = '$admin_pas' ");

									while($ln = mysql_fetch_assoc($SQL_P)){
										$id_adm = $ln['id'];
										$nm_adm = $ln['nome'];
										$em_adm = $ln['email'];
										$us_adm = $ln['usuario'];
										$im_adm = $ln['imgPerfil'];
									}

								?>
								<form action="acoes/atualizar-perfil.php?id_adm=<?php echo $id_adm; ?>" method="POST" enctype="multipart/form-data">
								<table cellpadding="0" cellspacing="0" border="0">
									<tr>
										<td>Nome.:</td>
										<td><?php echo $nm_adm; ?></td>
									</tr>
									<tr>
										<td>Email.:</td>
										<td><input type="text" name="adm-email-up" value="<?php echo $em_adm; ?>"></td>
									</tr>
									<tr>
										<td>Usuário.:</td>
										<td><input type="text" name="adm-user-up" value="<?php echo $us_adm; ?>"></td>
									</tr>
									<tr>
										<td>Senha.:</td>
										<td><input type="password" name="adm-pass-up" maxlength="15" required=""></td>
									</tr>
									<tr>
										<td colspan="2" align="right"><input type="submit" value="Atualizar Dados"></td>
									</tr>
								</table>
								<table id="imgPerfil">
								<tr>
									<td><img src="imagens/perfil/<?php echo $im_adm; ?>" width="180" height="180"></td>
								</tr>
								<tr>
									<td><input type="text" id="imagem-noticia-carregar" placeholder="Selecione uma imagem" required="" />
									<input type="file" hidden id="imagem-carregada" name="adm-imgPerfil-up" /></td>
								</tr>
								</table>	
								</form>
							</section>

					</section> <!--content-->

			</section> <!--wrapper-->
		</main>
<?php require "includes/footer.php"; ?> 