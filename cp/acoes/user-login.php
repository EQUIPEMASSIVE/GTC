<?php
 require_once'../includes/configuration.php';

$userName = $_POST["user-name"];
$userPass = $_POST["user-pass"]; 
@$rediURL = $_GET["url"];   

$SQL = @mysql_query("SELECT usuario, senha FROM administradores WHERE usuario='$userName' AND senha='$userPass' ");

if(@mysql_num_rows($SQL) != 0){
        
        session_start();
            
            $_SESSION['usuario'] = $userName;
            $_SESSION['senha'] = $userPass;

if(isset($rediURL)){


	header("Location ../$rediURL");
}  else {

	header("Location: ../inicial.php");

}          
                 
    
}else{
    
    
    header("Location: ../index.php");
}

?>