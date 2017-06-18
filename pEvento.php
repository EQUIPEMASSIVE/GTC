<?php require_once 'includes/header.php';?>

<br><br>
<main>
    <br>
<div class="container">
        <div class="row-fluid">


        
        <button class="btn btn-warning btn-rounded" style="position: fixed; z-index: 98; top: 85%; margin-left: 85%; border-radius: 30px; padding: 10px; background-color: greenyellow;"><a href="#"><i class="fa fa-arrow-up" style="color: #000000;"></i></a></button>


        <h1><a href="teste.php" style="color: red; margin-left: 15px;" class="btn btn-success">Enviar Evento</a></h1>
<?php
    //A qunatidade de noticias a ser exibida a ser exibida
    $quantidade = 4;//Altere a quantidade 
    //a pagina atual
    $pagina     = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
    //Calcula a pagina de qual valor será exibido
    $inicio     = ($quantidade * $pagina) - $quantidade;
    //Monta o SQL com LIMIT para exibição dos dados  
    $SQL_B = "SELECT * FROM eventos WHERE status = '1' ORDER BY  id_evento DESC LIMIT $inicio, $quantidade";
    //Executa o SQL
    $qr  = mysql_query($SQL_B) or die(mysql_error());
    //Percorre os campos da tabela
    while($pusha = mysql_fetch_assoc($qr)){
?>

                <!--First row-->
            


 						

                <div class="col-md-6">
                <!--Card-->
                <div class="card-block" style="min-height: 400px; max-width: auto; background-color: white; padding-bottom: 10px;">


                    <!--Card image-->
                    <div class="card-block">  
                     
                      <div class="view overlay hm-zoom"><!--codigo para por nome da categoria em cima da imagem da noticia-->
                            <!--   <a href="noticia.php?id=<?php echo $pusha['id_evento']; ?>" -->                            
                             <a <a href="noticiaE.php?id=<?php echo $pusha['id_evento']; ?>"> <img class="img-fluid" src="fotos/<?php echo $pusha['imagem']; ?>" alt="Postagem 1"/></a>
                               
                              
                      

                          <!--  <div  style="position: absolute; top: -20px; left: 0px;"><!--texto categoria da noticia por id
                              <h1 style="font-size: 20px; text-align: left; text-shadow: 3px 3px 4px rgba(0,0,0,.7); background-color: rgba(0,0,0,1.5); padding: 3px;"> 

                                <b><div href="noticia.php?id=<?php echo $pusha['id_categoria']; ?>" style="color: greenyellow; text-shadow: 1px 1px 2px rgba(0,0,0,.7);"><span><?php echo $pusha['nome_categoria'];?></div></b></span> 
                             <div>
                              </h1>
                            </div> -->
                     

                
                        </div>


                       
                    </div>
                    <!--/.Card image-->

                    <!--Card content-->
                    <div class="card-block" style="text-align:center">
                        <!--Title-->
                        <!--h5 class="price"><a href="categoria.php?id=<?php //echo $pusha['id_categoria']; ?>"> <span class="badge btn-elegant"> <?php //echo $pusha['nome_categoria']; ?></span></a></h5>--> 
                              
                 

                       <h1 class="card-title"> <a href="noticiaE.php?id=<?php echo $pusha['id_evento']; ?>" style="color: #000"><?php echo $pusha['titulo'];?></a></h1> 
                                                
                        <!--Text-->
                       
                        <!--<a href="noticia.php?id=<?php echo $pusha['id_noticia']; ?>" class="black-text d-flex flex-row-reverse"><h7 class="waves-effect p-2">Leia mais... <i class="fa fa-chevron-right"></i></h7></a>-->
                      
                        

                        
                    </div>
                    <!--/.Card content-->
                
                </div>
                 <div style="margin-left: 180px;  ;position: absolute; margin-top: -20px;">
                        <span style="color: #C0C0C0; ";><i class="fa fa-clock-o" ></i> Publicado dia: <?php 
                        $dataE = explode ( "-", $pusha ['dataPub'] );                           
                        echo $dataE [2] . "/" . $dataE [1] . "/" . $dataE [0]; ?></p></span> 
                        </div>
                <!--/.Card--> <br> <br> 
            </div>
            <!--First columnn-->



 <?php } ?> 


        </div> <!--/ Row Main Layout--> 
</div>     <!--/.Container Main Layout--> 

</main>





<!--´CÓDIGO DE PAGINAÇÃO------------------------------------------------------------------------------------------------------------------------------>

<?php
  /**
   * SEGUNDA PARTE DA PAGINAÇÃO
   */
  //SQL para saber o total
  $sqlTotal   = "SELECT id_evento FROM eventos";
  //Executa o SQL
  $qrTotal    = mysql_query($sqlTotal) or die(mysql_error());
  //Total de Registro na tabela
  $numTotal   = mysql_num_rows($qrTotal);
  //O calculo do Total de página ser exibido
  $totalPagina= ceil($numTotal/$quantidade);
   /**
    * Defini o valor máximo a ser exibida na página tanto para direita quando para esquerda
    */
   $exibir = 2;
   /**
    * Aqui montará o link que voltará uma pagina
    * Caso o valor seja zero, por padrão ficará o valor 1
    */
   $anterior  = (($pagina - 1) == 0) ? 1 : $pagina - 1;
   /**
    * Aqui montará o link que ir para proxima pagina
    * Caso pagina +1 for maior ou igual ao total, ele terá o valor do total
    * caso contrario, ele pegar o valor da página + 1
    */
   $posterior = (($pagina+1) >= $totalPagina) ? $totalPagina : $pagina+1;
   /**
    * Agora monta o Link paar Primeira Página
    * Depois O link para voltar uma página
    */
  /**
    * Agora monta o Link para Próxima Página
    * Depois O link para Última Página
    */
    ?>



<!--Pagination blue-->
        <nav id="navegacao" style="text-align: center;">
         
       
    | <a  class="badge btn-outline-danger" href=<?php echo "\"?pagina=1\"><<</a> | ";
    ?>
     <a class="badge btn-danger" href=<?php echo "\"?pagina=$anterior\">anterior</a> | ";          
 
    ?>
         
         
        <?php
         /**
    * O loop para exibir os valores à esquerda
    */
   for($i = $pagina-$exibir; $i <= $pagina-1; $i++){
       if($i > 0)
        echo '<a style="color: red;" href="?pagina='.$i.'"> '.$i.' </a>';
  }
  echo '<a style="color: greenyellow; " href="?pagina='.$pagina.'"><strong>'.$pagina.'</strong></a>';
  for($i = $pagina+1; $i < $pagina+$exibir; $i++){
       if($i <= $totalPagina)
        echo '<a style="color:red ;" href="?pagina='.$i.'"> '.$i.' </a>';
  }
   /**
    * Depois o link da página atual
    */
   /**
    * O loop para exibir os valores à direita
    */
    ?>
     | <a class="badge btn-light-green" href=<?php echo "\"?pagina=$posterior\">próxima</a> | ";
    ?>
     <a class="badge btn-outline-success" href=<?php echo "\"?pagina=$totalPagina\">>></a> | ";          
 
    ?>

    </nav>
         

</main>









<?php require_once 'includes/footer.php'; ?>