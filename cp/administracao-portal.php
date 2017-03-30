<?php
 require_once "includes/configuration.php";
 require_once "includes/header.php"
?>
	<main>
		<section id="wrapper">
			<section id="content">
			<section id="administracao-portal">
			<h1>Cadastrar Novo Administrador</h1>
			<form action="acoes/cadastrar-adminstrador.php" method="POST" >
			<table cellpadding="0" cellspacing="0" border="0">
				<tr>
					<td>Nome.:</td>
					<td><input type="text" name="adm-name" maxlength="50" required="" /></td>
				</tr>
				<tr>
					<td>Email.:</td>
					<td><input type="text" name="adm-email"  maxlength="100" required="" /></td>
				</tr>
				<tr>
					<td>Usuário.:</td>
					<td><input type="text" name="adm-user" maxlength="30" required="" /></td>
				</tr>
				<tr>
					<td>Senha.:</td>
					<td><input type="password" name="adm-pass" maxlength="15" required="" /></td>
				</tr>
				<tr>
					<td colspan="2" align="right"><input type="submit" value="Cadastrar Administrador"></td>
				</tr>
			</table>  	
			</form>	
			</section>
			<section id="administracao-portal-cd">
			<h1>Adminstradores Cadastrados</h1>	
			<table cellpadding="0" cellspacing="0" border="0">
				<tr>
					<td>Nome</td>
					<td>Foto Perfil</td>
					<td>Email</td>
					<td>Usuário</td>
					<td>Artigos Publicados</td>
				</tr>
				<?php 
					$SQL = mysql_query("SELECT * FROM administradores") or die(mysql_error());
						while ($lh = mysql_fetch_array($SQL)) {
						      $idAdm = $lh['id']; 	
						      $SQL_COUNT_NT = mysql_query("SELECT * FROM noticias WHERE id_autor='$idAdm'");
							  $SQL_COUNT = mysql_num_rows($SQL_COUNT_NT); 	
				?>
				<tr>
					<td><?php echo $lh['nome']; ?></td>
					<td><img src="imagens/perfil/<?php echo $lh['imgPerfil']; ?>" width="120" height="80" /></td>
					<td><?php echo $lh['email']; ?></td>
					<td><?php echo $lh['usuario']; ?></td>
					<td><?php echo $SQL_COUNT; ?></td>  
				</tr>
				<?php } ?>
			</table>
			</section>	

			</section><!--Content-->	
		</section><!--Wrapper-->
	</main>
	<?php require "includes/footer.php"; ?> 	