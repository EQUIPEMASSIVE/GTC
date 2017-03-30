<?php
require_once "includes/header.php"
?>
  <script type="text/javascript" src="js/validacoes.js"></script>
  <main>
  	<section id="wrapper">
  		
  		<section id="content">
  			
  		<section id="cadastrar-categoria">
  		<h1> Cadastrar nova categoria</h1>
  		<form action="acoes/cadastrar-categoria.php" method="POST" onsubmit="return validarFormCat();">
  		<table>
  			<tr>
  				<td colspan="2">Informe o nome da(s) categorias(s) abaixo</td>
  			</tr>
  			<tr>
  				<td><input type="text" name="categorias-nomes" id="categorias-nomes" required="" /></td>
  				<td><input type="submit" value="Cadastrar" id="cadastrar-cat" /></td>
  			</tr>
  			<tr>
  				<td colspan="2" class="nota-table">*Sempre com virgula (,) o nome das categorias.</td>
  			</tr>
  		</table>
  		</form>	
  		</section>	

  		<section id="categorias-existentes">
  		<h1 class="btm">Categorias cadastradas:</h1>
  		<table border="0" cellpadding="0" cellspacing="0">
  			<tr>
  				<td>Nome da Categoria</td>
  				<td>Nº de Artigos</td>
  				<td>Excluir</td>
  			</tr>	
        <?php
          $SQL_CT = mysql_query("SELECT * FROM categoria");
            while ($CTN = mysql_fetch_array($SQL_CT)) {
                $id_ct = $CTN['id_categoria'];
                $SQL_COUNT_NT = mysql_query("SELECT * FROM noticias WHERE categoria='$id_ct' ");
                $COUNT_NUM = mysql_num_rows($SQL_COUNT_NT);

            
        ?>
        <tr>
          <td><?php echo $CTN['nome_categoria']; ?></td>
          <td><?php echo $COUNT_NUM; ?></td>
           <td><a href="acoes/excluir-categoria.php?id_ct=<?php echo $id_ct; ?>">Excluir Categoria</a></td>
        </tr>  
        <?php } ?>
  		</table>	
  		</section>

  		</section> <!-- id Content-->

  	</section><!--id wrapper-->

  </main>
  
 <?php require "includes/footer.php"; ?> 	