<?php require_once 'includes/header.php';  ?>

<br><br><br>
  <main>




        <div class="container">
        <div class="row-fluid">




<div class="col-md-6">
<div class="Compose-Message">
                    <div class="panel panel-success">
                        <div class="panel-heading">Publicar Notícia Rápida/Rascunho</div>
                        <div class="panel-body">
                            <form action="testeR.php" method="POST">
                                <label>Titulo da Postagem: </label> 
                                <input type="text" class="form-control" name="titulo-postagem" required="" />  
                                <label>Descrição da Notícia : </label>
                                <textarea rows="9" class="form-control" name="descricao-nota"></textarea>
                                <input class="btn btn-success" type="submit" name="publicar-nota" value="Publicar Nota" style="margin-top: 8px;"/>
                            </form>
                        </div>
                        <div class="panel-footer text-muted">
                            <strong>Note : </strong>Todas as postagem aqui feitas iram para
                            rascunhos!
                        </div>
                    </div>
                </div>
             </div>   

     </div>        
</div>
     








  </main>




    
   
<?php require_once 'includes/footer.php';  ?>
