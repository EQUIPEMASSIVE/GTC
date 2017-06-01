<?php 

require_once 'includes/header.php'; 
require_once "includes/configuration.php";
 ?>


<br><br><br>
  <main>




        <div class="container">
        <div class="row-fluid">


                <div class="col-md-6 col-sm-6">
                      <!--    Striped Rows Table  -->
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            Eventos Pendentes
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nome da Categoria</th>
                                            <th>Conteudo</th>
                                            <th>Visualizar</th>
                                            <th>Excluir</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php
          $SQL_CT = mysql_query("SELECT * FROM eventos WHERE status='0'" );// vai puxar todas os campos com status 0
            while ($CTN = mysql_fetch_array($SQL_CT)) {
                $id_ct = $CTN['id_evento'];//puxa uma imformação por id
                $SQL_COUNT_NT = mysql_query("SELECT * FROM eventos WHERE titulo='$id_ct' ");
                //$COUNT_NUM = mysql_num_rows($SQL_COUNT_NT); transforma os valores por numeros

            
        ?>
        <tr>
          <td><?php echo $CTN['titulo']; ?></td>
          <!--<td><?php echo $COUNT_NUM; ?></td>-->
          <td><?php echo $CTN['conteudo']; ?></td>
          <td><a href="visu-evento.php?id_ct=<?php echo $id_ct; ?>">Visualizar</a></td><!--abrirá uma pag com um fomrulario exibindo a informação por id-->
           <td><a href="excluir-evento.php?id_ct=<?php echo $id_ct; ?>">Excluir Evento</a></td>
        </tr>  
        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--  End  Striped Rows Table  -->
                </div>





<div class="col-md-6 col-sm-6">
                      <!--    Striped Rows Table  -->
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            Eventos Publicados
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nome da Categoria</th>
                                            <th>Conteudo</th>
                                          <!--  <th>Visualizar</th> -->
                                            <th>Excluir</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php
          $SQL_CT = mysql_query("SELECT * FROM eventos WHERE status='1'" );
            while ($CTN = mysql_fetch_array($SQL_CT)) {
                $id_ct = $CTN['id_evento'];
                $SQL_COUNT_NT = mysql_query("SELECT * FROM eventos WHERE titulo='$id_ct' ");
                //$COUNT_NUM = mysql_num_rows($SQL_COUNT_NT); transforma os valores por numeros

            
        ?>
        <tr>
          <td><?php echo $CTN['titulo']; ?></td>
          <!--<td><?php echo $COUNT_NUM; ?></td>-->
          <td><?php echo $CTN['conteudo']; ?></td>
         <!-- <td><a href="visu-evento.php?id_ct=<?php echo $id_ct; ?>">Visualizar</a></td> -->
           <td><a href="excluir-evento.php?id_ct=<?php echo $id_ct; ?>">Excluir Evento</a></td>
        </tr>  
        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--  End  Striped Rows Table  -->
                </div>





     </div>        
</div>






 





  </main>




    
   
<?php require_once 'includes/footer.php';  ?>
