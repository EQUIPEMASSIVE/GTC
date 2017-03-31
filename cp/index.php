<?php
//pagina de login, se o login e senha forem correspondentes aos cadastrados no banco, irá abrir o panel de controle.
session_start();

    @$Usuario = $_SESSION["usuario"];
    @$Senha = $_SESSION["senha"];

if (isset($Usuario) && isset($Senha)){
    
    header("Location: inicial.php");
  
} 

// Programa pra criptografar e ver a senha \/
$senha = "123";
$codificada = hash('whirlpool', $senha);

echo "Resultado da codificação usando whirlpool: " . $codificada;

?>


<html lang="pt_br">
	<head>
		<meta charset="utf-8" />
		<title>Painel de Controle - Portal WVD</title>
		<link rel="stylesheet" type="text/css" href="css/default.css" media="screen" />
		<script type="text/javascript" src="jquery-1.9.1.js"></script>
	</head>
	
	<body>
		
	<main id="login">
 	
 	<?php

 	 if(isset($_GET["url"])){

 	 	$url = $_GET["url"];
 	 

 	?>	

		<form action="acoes/user-login.php?url=<?php echo $url; ?>" method="POST">
		<?php } else { ?>
		<form action="acoes/user-login.php" method="POST">
		<?php } ?> 
		<table>
			<tbody>
				<tr>
					<td colspan="2"><h1>Painel de Controle</h1></td>
				</tr>
			<tr>
				<td>Usuário</td>
				<td><input type="text" name="user-name" id="user-name" /></td>
			</tr>
			
			<tr>
				<td>Senha</td>
				<td><input type="password" name="user-pass" id="user-pass" /></td>
			</tr>
			
			<tr>
				<td colspan="2"><input type="submit" name="user-login" id="user-login" value="Iniciar Sessão" /></td>
			</tr>
			</tbody>
		</table>
		</form>
			
	</main>
		
	</body>
</html>
