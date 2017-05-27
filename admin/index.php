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
    <title>Administração GTC</title>
    <?php require "includes/imports-header.php";?>
</head>

<body class="error-body no-top lazy  pace-done" data-original="resources/assets/img/work.jpg" style="background-image: url('resources/assets/img/work.jpg')">
<div class="container">
    <div class="row login-container animated  flipInX">
        <div class="col-md-7 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-offset-1 no-padding">


            <div class="tiles grey p-t-20 p-b-20 no-margin text-black tab-content lockscreen-wrapper" style="border-radius: 10px;">
                <div class="row ">
                    <div class="col-md-8 col-md-offset-1 col-sm-6 col-sm-offset-3 col-xs-offset-1" style="width: 100%;">

                        <?php
                        if(isset($_GET["url"])){

                        $url = $_GET["url"];
                        ?>
                        <form class="user-form" action="acoes/user-login.php?url=<?php echo $url; ?>" method="POST" style="width: 100%;">
                            <?php } else { ?>

                            <form class="user-form" action="acoes/user-login.php" method="POST" style="width: 100%;">
                                <?php } ?>
                                <div class="profile-wrapper">
                                    <img width="69" height="69" data-src-retina="resources/assets/img/logo-index-01.jpg" data-src="resources/assets/img/logo-index-01.jpg" src="resources/assets/img/logo-index-01.jpg" alt="Imagem GTC">
                                </div>
                                <h2 class="user">Administração <span class="semi-bold">GTC</span></h2>
                                <input name="user-name" required="required" type="text" placeholder="Digite o seu nome ...">
                                <input name="user-pass" required="required" type="password" placeholder="Digite o sua senha ...">
                                <button type="submit" name="user-login" class="btn btn-primary " style=" margin-top: 3px;" ><i class="fa fa-lock"></i></button>
                            </form>

                    </div>
                </div>
            </div>
            <div id="push"></div>
        </div>
    </div>
</div>
<?php require "includes/imports-header.php";?>
</body>
</html>