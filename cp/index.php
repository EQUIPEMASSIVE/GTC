<?php
//pagina de login, se o login e senha forem correspondentes aos cadastrados no banco, irá abrir o panel de controle.
session_start();

    @$Usuario = $_SESSION["usuario"];
    @$Senha = $_SESSION["senha"];

if (isset($Usuario) && isset($Senha)){
    
    header("Location: inicial.php");
  
} 

// Programa pra criptografar e ver a senha \/
//$senha = "123";
//$codificada = hash('whirlpool', $senha);

//echo "Resultado da codificação usando whirlpool: " . $codificada;

?>


<html lang="pt_br">
	<head>
		<meta charset="utf-8" />
		<title>Painel de Controle - Portal WVD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="teste.ico">
		<link rel="stylesheet" type="text/css" href="css/default.css" media="screen" />
		<script type="text/javascript" src="jquery-1.9.1.js"></script><link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="signin.css" rel="stylesheet">
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

	</head>
	
	<body>
		

    <?php

   if(isset($_GET["url"])){

    $url = $_GET["url"];
   

  ?>  
      
    <form  action="acoes/user-login.php?url=<?php echo $url; ?>" method="POST">
    <?php } else { ?>

    <div class="container">
  
    <form action="acoes/user-login.php" method="POST" class="form-signin">
    <?php } ?> 


        <h2 class="form-signin-heading"><center>  
          <h2>Login Administrador</h2>
        </center></h2>  
        
      
        <label for="inputText" class="sr-only">Usuário</label>
        <input name="user-name" type="text" autofocus required class="form-control"  placeholder="usuário" id="inputText">
      
            
        <label for="inputPassword" class="sr-only">Senha</label>
        <input name="user-pass" type="password" required class="form-control"  placeholder="Senha" id="inputPassword">
      
      
      
          <div class="checkbox">
            <label>
               <input type="checkbox" value="remember-me"> 
               Lembrar<br>
            </label>
          </div>
        
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="user-login" >Entrar</button>
       </form>
     </div> <!-- /container -->
 	

	<script src="assets/js/ie10-viewport-bug-workaround.js"></script>	
	</body>
</html>
