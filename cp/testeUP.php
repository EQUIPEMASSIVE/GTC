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
                    <div class="panel panel-danger" style="border: 1px solid #333;">
                        <div class="panel-heading" style="background-color: #333; border: 1px solid #333; color: white;">
                            Eventos Pendentes
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive" style="overflow: auto; height: 400px;">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nome do Evento</th>
                                            <th>Hora</th>
                                            <th>Status</th>
                                            <th>Data de Cadastro</th>
                                            <th>Visualizar</th>
                                            <th>Excluir</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php
          $SQL_CT = mysql_query("SELECT * FROM eventos WHERE status='0' ORDER BY id_evento DESC" );// vai puxar todas os campos com status 0
            while ($CTN = mysql_fetch_array($SQL_CT)) {
                $id_ct = $CTN['id_evento'];//puxa uma imformação por id
                //$SQL_COUNT_NT = mysql_query("SELECT * FROM eventos WHERE titulo='$id_ct'  ");
                //$COUNT_NUM = mysql_num_rows($SQL_COUNT_NT); transforma os valores por numeros

            
        ?>
        <tr>
          <td><?php echo $CTN['titulo']; ?></td>
          <!--<td><?php echo $COUNT_NUM; ?></td>-->
          <td><?php 

            echo $CTN['horaPub'];
            
             ?></td>

          <td><?php if ($CTN['status'] == '0')  {

            echo "";
            
          }
          ?> 
          <i class="fa fa-close" aria-hidden="true" style="color: red; margin-left: 15px;"></i>       
          </td>

          <td>
             <i class="fa fa-calendar" aria-hidden="true"></i> 
            <?php 
                  $dataE = explode ( "-", $CTN ['dataPub'] );
                  echo $dataE [2] . "/" . $dataE [1] . "/" . $dataE [0];
            ?>  
          </td>

          <td><a href="visu-evento.php?id_ct=<?php echo $id_ct; ?>"><i class="fa fa-eye" aria-hidden="true" style="margin-left: 17px; font-size: 20px; color: yellowgreen;"></i></a></td><!--abrirá uma pag com um fomrulario exibindo a informação por id-->
           <td><a href="excluir-evento.php?id_ct=<?php echo $id_ct; ?>"><i class="fa fa-trash" aria-hidden="true" style="color: red; margin-left: 15px;"></i></a></td>
        </tr>  
        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--  End  Striped Rows Table  -->
                </div>






<!-- 000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000-->





<div class="col-md-6 col-sm-6">
                      <!--    Striped Rows Table  -->
                    <div class="panel panel-success" style="border: 1px solid #333;">
                        <div class="panel-heading" style="background-color: #333; border: 1px solid #333; color: white;">
                            Eventos Publicados
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive" style="overflow: auto; height: 400px;">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nome do Evento</th>
                                            <th>Status</th>
                                            <th>Data de Cadastro</th>
                                          <!--  <th>Visualizar</th> -->
                                            <th>Excluir</th>
                                            <th>Cheked</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php
          $SQL_CT = mysql_query("SELECT * FROM eventos WHERE status='1' ORDER BY id_evento DESC ");
            while ($CTN = mysql_fetch_array($SQL_CT)) {
                $id_ct = $CTN['id_evento'];
                //$SQL_COUNT_NT = mysql_query("SELECT * FROM eventos WHERE titulo='$id_ct' ");
                //$COUNT_NUM = mysql_num_rows($SQL_COUNT_NT); transforma os valores por numeros

            
        ?>
        <tr>
          <td><?php echo $CTN['titulo']; ?></td>
          <!--<td><?php echo $COUNT_NUM; ?></td>-->
          <td><?php $CTN['status'];?>  
          <i class="fa fa-check" aria-hidden="true" style="color: yellowgreen; margin-left: 15px;"></i>       
          </td>


          <td><i class="fa fa-calendar" aria-hidden="true"></i> <?php 
$dataE = explode ( "-", $CTN ['dataPub'] );
echo $dataE [2] . "/" . $dataE [1] . "/" . $dataE [0];
?> </td>
         <!-- <td><a href="visu-evento.php?id_ct=<?php echo $id_ct; ?>">Visualizar</a></td> -->
           <td><a href="excluir-evento.php?id_ct=<?php echo $id_ct; ?>"><i class="fa fa-trash" aria-hidden="true" style="color: red; margin-left: 15px;"></i></a></td>
            <td><?php echo $CTN['autorPub']; ?></td>
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
