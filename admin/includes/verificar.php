<?php
//faz uma verificação de login e senha, se estiver correto, irá abrir a sessao



@$Usuario = $_SESSION["usuario"];
@$Senha = $_SESSION["senha"];

if(!(isset($Usuario) && isset ($Senha))){

	$url = explode("/", $_SERVER["REQUEST_URI"]); 


    header("Location: index.php?=$url[2]");
    
   
    
    }else if(isset($Usuario) && isset($Senha)){
        $SQL = mysql_query("SELECT usuario, senha FROM administradores WHERE usuario='$Usuario' AND senha='$Senha'");
    
    if(mysql_num_rows($SQL) == 0){
        
        echo "<script>alert(\"Area Restrita\")</script>";
        header("Location: ../index.php");
    }else{
        
        
    }
}

?>