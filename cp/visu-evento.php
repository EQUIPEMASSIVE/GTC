<?php require_once 'includes/header.php';  ?>

<br><br><br>
  <main>


<?php


$id_ct = $_GET ["id_ct"];
$sql = mysql_query ( "SELECT * FROM eventos WHERE id_evento=$id_ct AND status='0' ")or die(mysql_error());



// Exibe as informações de cada usuário
while ($evento = mysql_fetch_array($sql)) {

              
              
?>

        

        <div class="container">
        <div class="row-fluid">
<div class="col-md-6">
<div class="Compose-Message">
                    <div class="panel panel-success">
                        <div class="panel-heading">Publicar Notícia Rápida/Rascunho</div>
                        <div class="panel-body">
                            <form action="atualizar-evento.php?id_ct=<?php echo $id_ct; ?>" method="POST">
                           

                            
                                <label>Titulo da Postagem: </label> 
                                <input type="text" class="form-control" name="titulo-evento" value="<?php echo $evento['titulo']; ?>" />  
                                <label>Descrição da Notícia : </label>
                                <textarea rows="9" class="form-control" name="conteudo-evento" value=""><?php echo $evento['conteudo']; ?></textarea>
                                <input class="btn btn-success" type="submit" name="publicar-nota" value="Habilitar Evento" style="margin-top: 8px;"/>
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
     




<?php } ?>



  </main>







    
   
<?php require_once 'includes/footer.php';  ?>