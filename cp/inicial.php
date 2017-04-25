<?php 
require "includes/header.php";


?>
	

		
    <div class="content-wrapper">
    
        <div class="container">
        <div class="row-fluid">
  

        <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------- -->    

  
        <div class="col-md-6">     
                <div class="Compose-Message">               
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            Publicar Notícia Rápida/Rascunho
                        </div>
                        <div class="panel-body">
                         <form action="acoes/publicar-notaR.php" method="POST">   
                            <label>Titulo da Postagem: </label>
                            <input type="text" class="form-control" name="titulo-postagem" required />
                            <label>Tags de Pesquisa:  </label>
                            <input type="text" class="form-control" name="tags-pesquisa" />
                            <label>Descrição da Notícia : </label>
                            <textarea rows="9" class="form-control" name="descricao-nota"></textarea>                     
                            <input  class="btn btn-warning" type="submit" name="publicar-nota" value="Publicar Nota" />
                          </form>
                        </div>
                        <div class="panel-footer text-muted">
                            <strong>Note : </strong>Todas as postagem aqui feitas iram para rascunhos!
                        </div>
                    </div>
                </div>
            
            </div><!--Fim col-->    

        <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------- -->    

        <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                            <h3>Atualização</h3>
                    </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <td>Noicias Publicadas</td>
                                            <td><?php
            								$SQL = mysql_query("SELECT * FROM noticias WHERE status=1");
            								echo mysql_num_rows($SQL);	
							                 ?></td>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Categorias Ativas</td>
                                            <td><?php
            								$SQL = mysql_query("SELECT * FROM categoria");
            								echo mysql_num_rows($SQL);	
							                 ?></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> 
                </div><!--fim col-->
        
        <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------- -->
           
            <div class="col-md-6">
                <div class="alert alert-info">
                   <h1>Últimas Notícias</h1>
				<ul>
				<?php
					$SQL_NI = mysql_query("SELECT * FROM noticias WHERE status=1");
					while($lh = mysql_fetch_array($SQL_NI)){
				?>
					<li><?php echo $lh["titulo"]; ?></li>
					<?php } ?>	
				</ul>
                </div>
                    
            </div><!--Fim col-->
            
         <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------- -->    

            
            
           
          
            
                </div><!--fim row-->
            </div>
        </div>
    
         
        
			

<?php require "includes/footer.php"; ?>