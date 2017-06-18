<?php
require_once 'includes/configuration.php';

// Se o usuário clicou no botão cadastrar efetua as ações
if (isset($_POST['cadastrar'])) {
	
	// Recupera os dados dos campos
	$titulo = $_POST['titulo'];//TEm que receber o nome que está no fomrulario
	$conteudo = $_POST['conteudo'];//TEm que receber o nome que está no fomrulario//TEm que receber o nome que está no fomrulario
	$imagem = $_FILES["imagem"];//TEm que receber o nome que está no fomrulario
	$data = date("Y-m-d");//a variavel recebe a data do dia e grava no banco pelo insert into
	$status = 0;// status 0 vai ser cadastrado no banco
	$autor = 0;
	$horaPub   = date('Y-m-d h:i:s');
	
	// Se a foto estiver sido selecionada
	if (!empty($imagem["name"])) {
		
		// Largura máxima em pixels
		$largura = 4000;
		// Altura máxima em pixels
		$altura = 4000;
		// Tamanho máximo do arquivo em bytes
		$tamanho = 10000000;

		$error = array();

    	// Verifica se o arquivo é uma imagem
    	if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $imagem["type"])){
     	   $error[1] = "Isso não é uma imagem.";
   	 	} 
	
		// Pega as dimensões da imagem
		$dimensoes = getimagesize($imagem["tmp_name"]);
	
		// Verifica se a largura da imagem é maior que a largura permitida
		if($dimensoes[0] > $largura) {
			$error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
		}

		// Verifica se a altura da imagem é maior que a altura permitida
		if($dimensoes[1] > $altura) {
			$error[3] = "Altura da imagem não deve ultrapassar ".$altura." pixels";
		}
		
		// Verifica se o tamanho da imagem é maior que o tamanho permitido
		if($imagem["size"] > $tamanho) {
   		 	$error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
		}

		// Se não houver nenhum erro
		if (count($error) == 0) {
		
			// Pega extensão da imagem
			preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $imagem["name"], $ext);

        	// Gera um nome único para a imagem
        	$nome_imagem = md5(uniqid(time())) . "." . $ext[1];

        	// Caminho de onde ficará a imagem
        	$caminho_imagem = "fotos/" . $nome_imagem;// Tem que possuir uma pasta "Fotos" para receber os updates das fotos pelo formulario

			// Faz o upload da imagem para seu respectivo caminho
			move_uploaded_file($imagem["tmp_name"], $caminho_imagem);
		
			// Insere os dados no banco
			$sql = mysql_query("INSERT INTO eventos VALUES ('', '".$autor."', '".$titulo."', '".$data."', '".$horaPub."', '".$nome_imagem."', '".$conteudo."', '".$status."')")or die(mysql_error());// para cadastrar cada informação, as variaveis tem que está na mesma ordem que no banco
		
			// Se os dados forem inseridos com sucesso
			if ($sql){
				echo "Você foi cadastrado com sucesso.";
				header("Location: teste-success.php");
			}
		}
	
		// Se houver mensagens de erro, exibe-as
		if (count($error) != 0) {
			foreach ($error as $erro) {
				echo $erro . "<br />";
			}
		}
	}
}
?>
