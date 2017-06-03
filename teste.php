<?php require_once 'includes/header.php';  ?>

<br><br><br>
  <main>




        <div class="container">
        <div class="row-fluid">




<div class="col-md-6">
<form action="testeBACK.php" method="POST" enctype="multipart/form-data" >
<div class="Compose-Message">
                    <div class="panel panel-success">
                        <div class="panel-heading">Publicar Eventos</div>
                        <div class="panel-body">
                                <label>Titulo do Evento: </label> 
                                <input type="text" class="form-control" name="titulo" required="" /> 
                                <br>
                                <label><i class="fa fa-camera" aria-hidden="true"></i> Carregar imagem</label>
                                <input type="file" name="imagem" required="">
                                <br>
                                <label>Descrição da Notícia : </label> 
                                <textarea rows="9" class="form-control" name="conteudo" required=""></textarea>
                                <input class="btn btn-success" type="submit" name="cadastrar" value="Cadastrar" style="margin-top: 8px;"/>
                        </div>
                        <div class="panel-footer text-muted">
                            <strong>Note : </strong>Todas as postagem aqui feitas iram para
                            rascunhos!

                        </div>
                    </div>
                </div>
</form> 
             </div>   

     </div>        
</div>
     








  </main>




    
   
<?php require_once 'includes/footer.php';  ?>
