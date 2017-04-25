<?php
 require_once "includes/configuration.php";
 require_once "includes/header.php"
?>
	
    
    <div class="content-wrapper">
        <div class="container">
  	       <div class="row">
  			   <div class="col-md-5 col-sm-6">
                      <!--    Striped Rows Table  -->
         <div class="panel panel-danger">
              <div class="panel-heading">Cadastar Novo Administrador</div>
                  <div class="panel-body">
                      <div class="table-responsive">
  		
  		    <form action="acoes/cadastrar-adminstrador.php" method="POST" onsubmit="return validarFormCat();">

	  			<div class="form-group has-warning">
		         	  <label class="control-label" for="success">Nome</label>
		         	  <input class="form-control" id="success" type="text" name="adm-name" maxlength="50" required="required" />

		         	  <label class="control-label" for="success">Email</label> 	 
		         	  <input class="form-control" id="success" type="email" name="adm-email"  maxlength="100" required="required" />

		         	  <label class="control-label" for="success">Usúario</label>
		         	  <input class="form-control" id="success" type="text" name="adm-user" maxlength="30" required="required" />
	         	
		         	  <label class="control-label" for="warning">Senha</label>
		    		  <input type="password" class="form-control" id="warning" name="adm-pass" maxlength="15" required="required" />
		   		</div> 		  	
					  <button type="submit" class="btn btn-danger">Cadastrar</button>
  			
  
  		    </form>	

          </div>
               </div>
                   </div>
                    <!--  End  Striped Rows Table  -->
                         </div>
               
  			
                
            		<div class="col-md-7 col-sm-6">
                      <!--    Striped Rows Table  -->
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            Categorias Cadastradas
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>Foto Perfil</th>
                                            <th>Email</th>
                                            <th>Usuário</th>
                                            <th>Artigo Publicado</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										            <?php 
													  $SQL = mysql_query("SELECT * FROM administradores") or die(mysql_error());
													  while ($lh = mysql_fetch_array($SQL)) {
												      $idAdm = $lh['id']; 	
												      $SQL_COUNT_NT = mysql_query("SELECT * FROM noticias WHERE id_autor='$idAdm'");
													  $SQL_COUNT = mysql_num_rows($SQL_COUNT_NT); 	
													  ?>
											        <tr>
											            <td><?php echo $lh['nome']; ?></td>
														<td><img src="imagens/perfil/<?php echo $lh['imgPerfil']; ?>" alt="Foto-Perfil" width="100" height="80" /></td>
														<td><?php echo $lh['email']; ?></td>
														<td><?php echo $lh['usuario']; ?></td>
														<td><?php echo $SQL_COUNT; ?></td>
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