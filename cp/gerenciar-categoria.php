<?php
require_once "includes/header.php"
?>
  <script type="text/javascript" src="js/validacoes.js"></script>
  <div class="content-wrapper">
        <div class="container">
  	       <div class="row">
  			   <div class="col-md-6 col-sm-6">
                      <!--    Striped Rows Table  -->
         <div class="panel panel-default">
              <div class="panel-heading">Cadastrar nova categoria</div>
                  <div class="panel-body">
                      <div class="table-responsive">
  		
  		    <form action="acoes/cadastrar-categoria.php" method="POST" onsubmit="return validarFormCat();">
  		
          <h5>Informe o nome da(s) categorias(s) abaixo</h5>
         
    			<input type="text" name="categorias-nomes" id="categorias-nomes" required />
		      <button type="submit" class="btn btn-default">Cadastrar</button>
  				<h5>Sempre com virgula (,) o nome das categorias.</h5>
  
  		    </form>	

          </div>
               </div>
                   </div>
                    <!--  End  Striped Rows Table  -->
                         </div>
               
  			
                
            		<div class="col-md-6 col-sm-6">
                      <!--    Striped Rows Table  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Categorias Cadastradas
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nome da Categoria</th>
                                            <th>Nº de Categorias</th>
                                            <th>Excluir</th>
                                        </tr>
                                    </thead>
                                    <tbody>
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
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--  End  Striped Rows Table  -->
                </div>
               </div> <!--FIM ROW-->
               
              
            
	</div> <!--FIM CONTAINER-->
</div> <!--content-wrapper-->
 <?php require "includes/footer.php"; ?> 	